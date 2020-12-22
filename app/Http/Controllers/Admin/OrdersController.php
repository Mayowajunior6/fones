<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use App\OrderLineItem;
Use App\User;
use App\Province;
use App\Taxation;
use App\Transaction;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('admin/orders/index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $user = User::find($order->user_id);
        $province = Province::find($order->province_id);
        $tax = Taxation::where('province_id',$order->province_id)->first();
        $orderlines = OrderLineItem::where('order_id',$order->id)->with('product')->get();
        $transaction = Transaction::where('order_id',$order->id)->orderBy('created_at','DESC')->first();
        $response = json_decode($transaction->response)->transaction_response;

        return view('admin/orders/edit', compact('order', 'user', 'province', 'orderlines', 'tax', 'response'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'bail|required|integer',
            'email' => 'bail|required|string',
            'billing_address' => 'bail|required|string',
            'shipping_address' => 'bail|required|string',
            'totalGST' => 'bail|required|numeric',
            'totalPST' => 'bail|required|numeric',
            'totalHST' => 'bail|required|numeric',
            'totaltax' => 'bail|required|numeric',
            'totalAmount' => 'bail|required|numeric'
        ]);

        // Validate each line item input fields
        $lines = OrderLineItem::where('order_id',$id)->get();
        $validLine = [];
        for ($i = 0 ; $i < count($lines) ; $i++) {
            $priceName = 'unitprice'.$lines[$i]['id'];
            $qtyName = 'quantity'.$lines[$i]['id'];
            $validLine[] = $request->validate([
                $priceName => 'bail|required',
                $qtyName => 'bail|required'
            ]);
        }

        $order = Order::find($valid['id']);

        if ($order->update($valid)) {
            for ($i = 0 ; $i < count($lines) ; $i++) {
                
                $data =[
                    'unitprice' => $validLine[$i]['unitprice'.$lines[$i]['id']],
                    'quantity' => $validLine[$i]['quantity'.$lines[$i]['id']]
                ];
                $orderline = OrderLineItem::find($lines[$i]->id);
                
                $orderline->update($data);
            }
            session()->flash('success', 'Order was successfully updated.');
        } else {
            session()->flash('error', 'System error when updating order record');
        }
        return redirect('/admin/orders');
    }

    
    /**
     * Cancel an order
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function cancel($id)
    {
        $order = Order::find($id);

        $data = ['status' => 'Cancel'];

        if ($order->update($data)) {
            session()->flash('success', 'Order was successfully cancelled.');
        } else {
            session()->flash('error', 'System error when updating order record');
        }
        return redirect('/admin/orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
