<?php
/**
 * Controller for order Summary
 * @file OrderSummaryController.php
 * @author  Shristi Malekoo <malekoo-s@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-4
 */
namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\UserAddress;
use Auth;

class OrderSummaryController extends Controller
{
    /**
     * navigate to the shopping cart page
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        if (!empty($user)) {
            $userAddresses = User::find(Auth::user()->id)->userAddress;
        } else {
            session()->flash('error', 'Please Login and add some items in a cart');
            return redirect('/login');
        }

        if (session()->has('cart')) {
            $cart = session('cart');
        } else {
            session()->flash('error', 'Please Add Some Items in a cart');
            return redirect('/products');
        }

        if (session()->has('order_id')) {
            $order_id = session('order_id');

            $order = Order::find($order_id);

            //forget order ID
            session()->forget('order_id');

            $orderLineItems = Order::find($order_id)->orderLineItems()->with('product')->get();
            $orderName      = User::find(Auth::user()->id)->firstName;
            if (session()->has('cart')) {
                session()->forget('cart'); //forget cart
            }

        }

        return view('shoppingcart/order_summary', compact('orderName', 'orderLineItems', 'order'));

    }
}
