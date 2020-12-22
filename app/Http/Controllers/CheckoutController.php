<?php
/**
 * Controller for checkout page
 * @file CheckoutController.php
 * @author  Erik Brommell <brommell-e@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-1
 */

namespace App\Http\Controllers;

use App\Http\Helpers\_5bx;
use App\Offer;
use App\Order;
use App\OrderLineItem;
use App\Taxation;
use App\User;
use App\UserAddress;
use Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * navigate to the checkout page
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        if (!empty($user)) {
            $userAddresses = User::find(Auth::user()->id)->userAddress;
        } else {
            session()->flash('error', 'Please Login to Proceed To Checkout');
            return redirect('/login');
        }

        if (session()->has('cart')) {
            $cart = session('cart');
        } else {
            session()->flash('error', 'Please Add Some Items in a cart');
            return redirect('/products');
        }

        if (!empty($userAddresses)) {
            foreach ($userAddresses as $address) {
                if ($address['shippingAddress'] == 1) {
                    $shippingAddress  = $address;
                    $shippingProvince = UserAddress::find($address->province_id)->province;
                    $tax              = Taxation::where('province_id', '=', $address->province_id)->get();
                    $cart->calculateTotal($tax[0]->gst, $tax[0]->pst, $tax[0]->hst);
                    $province_id = $address->province_id;
                }
                if ($address['billingAddress'] == 1) {
                    $billingAddress  = $address;
                    $billingProvince = UserAddress::find($address->province_id)->province;
                }
            }
            //------------address end ---------------

            //----calculate Earned Points by this Order----
            $earned_points = 0;
            foreach ($cart->getItems() as $item) {
                $points = Offer::where('product_id', '=', $item->getId())->first();
                if (!empty($points)) {
                    $earned_points = $earned_points + $points->points;
                }
            }
            //---------------------------------------------------------------

            return view('checkout/index', compact('billingAddress', 'shippingAddress', 'user', 'shippingProvince', 'billingProvince', 'cart', 'province_id', 'earned_points'));
        }
    }

    /**This Method to process the Payment and Add Order Dettails to the Transaction
     * [store description]
     * @param  Request $request [all the parameters form elements for the Payment]
     * @return [type]           [It will store the database]
     */
    public function store(Request $request)
    {

        //remove previous error message
        session()->forget('ErrorMessage');
        //size not working need to check

        $validatedData = $request->validate([

            'card_num'        => 'required|regex:/^[0-9]{4}\-?\ ?[0-9]{4}\-?\ ?[0-9]{4}\-?\ ?[0-9]{3,4}$/',
            'exp_date'        => 'required|regex:/^[0-9]{4}$/',
            'cvv'             => 'required|regex:/^[0-9]{3,4}$/',
            'card_type'       => 'required',
            'amount'          => 'required',
            'shippingAddress' => 'required',
            'billingAddress'  => 'required',

        ],

            [
                'card_num.required' => 'Card Number is a mandatory field!',
                'exp_date.regex'    => 'Expiry date must contain 2 digits for month then 2 digits for year eg: 0420.',
                'card_num.regex'    => 'Card number must be  numeric and of 15 digits for Amex and 16 digits for visa and mastercard.',
                'cvv.regex'         => 'You did not enter the correct CVV. Please try again!',
            ]

        );

        //----check cart in session----------------

        if (session()->has('cart')) {

            //-----------Begin Transaction-----------------------
            $response = '';
            DB::transaction(function () use ($validatedData, $response, $request) {

                $user = Auth::user();
                $cart = session('cart');

                //------calculate Total Amount if User has selected to Redeem Points
                $totalAmount  = $cart->getTotal();
                $redeemPoints = 0;

                if (!empty($request->pointsApplied) && $request->pointsApplied > 0) {
                    $redeemPoints = $request->pointsApplied;
                    $totalAmount  = $cart->getTotal() - ($request->pointsApplied / 1000);
                }
                //--------------------------------------------------------------------

                if ($request->session()->has('order_id')) {
                    $order_id = session('order_id');
                }

                if (!$request->session()->has('order_id')) {

                    //---------- insert order Record and Get Order ID --------------
                    $order_id = DB::table('orders')->insertGetId(['orderNumber' => '', 'user_id' => $user->id, 'status' => '', 'order_date' => carbon::now(), 'offer_id' => '1', 'province_id' => $request->province_id, 'email' => $user->email, 'totalGST' => $cart->getGST(), 'totalPST' => $cart->getPST(), 'totalHST' => $cart->getHST(), 'totaltax' => $cart->getGST() + $cart->getPST() + $cart->getHST(), 'pointsApplied' => $redeemPoints, 'billing_address' => $validatedData['billingAddress'], 'shipping_address' => $validatedData['shippingAddress'], 'totalAmount' => $totalAmount, 'created_at' => Carbon::now()]
                    );
                    //-------------------------------------------------------------

                    //-------------------insert order Line Items Records -----------------------
                    foreach ($cart->getItems() as $item) {
                        $OrderLineItem             = new OrderLineItem();
                        $OrderLineItem->order_id   = $order_id;
                        $OrderLineItem->product_id = $item->getId();
                        $OrderLineItem->unitprice  = $item->getUnitPrice();
                        $OrderLineItem->quantity   = $item->getQty();
                        $OrderLineItem->save();
                    }
                    //------------------------------------------------------------------------
                }

                //----------------------Insert Payment transaction record-------------------
                $transaction = new _5bx(env('PAYMENT_LOGINID'), env('PAYMENT_KEY'));
                $transaction->amount($validatedData['amount']);
                $transaction->card_num($validatedData['card_num']); // credit card number
                $transaction->exp_date($validatedData['exp_date']); // eg  1118
                $transaction->cvv($validatedData['cvv']); // card cvv number
                $transaction->ref_num($order_id); // your reference or invoice number
                $transaction->card_type($validatedData['card_type']); // card type
                $response = $transaction->authorize_and_capture(); // returns object
                // dd($response);

                $errormessage = '';
                if (!empty($response->transaction_response->errors)) {
                    foreach ($response->transaction_response->errors as $error) {
                        $errormessage = $errormessage . ' ' . $error;
                        $status       = 'F';
                    }
                    $request->session()->put('ErrorMessage', $errormessage);

                } else {
                    $status = 'S';
                }

                $transaction_id = DB::table('transactions')->insertGetId(['order_id' => $order_id, 'transactionDate' => Carbon::now(), 'amount' => $validatedData['amount'], 'response' => json_encode($response), 'status' => $status, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
                );
                //---------------End transaction table---------------------------------

                //----calculate Earned Points by this Order----
                $earned_points = 0;
                foreach ($cart->getItems() as $item) {
                    $points = Offer::where('product_id', '=', $item->getId())->first();
                    if (!empty($points)) {
                        $earned_points = $earned_points + $points->points;
                    }
                }
                //---------------------------------------------------------------

                //------------update order status ------------------
                if (!empty($transaction_id)) {
                    $order = new Order;
                    $order = Order::find($order_id);
                    if ($status == 'S') {
                        $order->status = "Complete";
                    } elseif ($status == 'F') {
                        $order->status = "InComplete";
                    }
                    $order->orderNumber = "INC" . $order_id;
                    $order->updated_at=Carbon::now();
                    $order->save();
                }

                ///------------End Update Order Status and-------------------------

                //------------------- Update User Earned Points and Redeem points when Transaction is successful -----------------
                if ($status == 'S') {
                    $updateuser         = new User();
                    $updateuser         = User::find($user->id);
                    $updateuser->points = $user->points + $earned_points - $redeemPoints;
                    $updateuser->updated_at=Carbon::now();
                    $updateuser->save();
                }
                //-----------End Update User Earned Points----------------------

                session()->forget('order_id');
                $request->session()->put('order_id', $order_id);

            });
        }
        if ($request->session()->has('ErrorMessage')) {
            session()->flash('error', session('ErrorMessage') . ". Please enter valid card details");
            return redirect('/checkout');
        } else {return redirect('/ordersummary');}

    }
}
