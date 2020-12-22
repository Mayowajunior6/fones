@extends('layouts.app')

@section('content')
<script>
    /**
     * Recalcuate the total tax and total amount for the order
     *
     * @return void
     */
    function recalculate() {

        var unitprice_list = document.querySelectorAll('.unitprice');
        var gst = document.getElementById('gst');
        var pst = document.getElementById('pst');
        var hst = document.getElementById('hst');
        var totalgst = document.getElementById('totalGST');
        var totalpst = document.getElementById('totalPST');
        var totalhst = document.getElementById('totalHST');
        var totaltax = document.getElementById('totaltax');
        var totalamount = document.getElementById('totalAmount');
        var subtotal = 0;

        unitprice_list.forEach(function(unitprice) {

            var qty = document.getElementById('quantity' + unitprice['id']);
            subtotal += unitprice['value'] * qty['value'];
        })
        console.log(subtotal);
        totalgst['value'] = Math.round(subtotal * gst['value'] * 100) / 100;
        totalpst['value'] = Math.round(subtotal * pst['value'] * 100) / 100;
        totalhst['value'] = Math.round(subtotal * hst['value'] * 100) / 100;

        totaltax['value'] = parseFloat(totalgst['value']) + parseFloat(totalpst['value']) + parseFloat(totalhst['value']);
        totalamount['value'] = parseFloat(totaltax['value']) + subtotal;

    }
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2>Edit an Order</h2>
                </div>

                <div class="card-body">

                    <p><a href="/admin/orders" class="btn btn-warning">Back</a></p>

                    <form id="order_form" class="form" action="/admin/orders/edit/{{ $order->id }}" 
                        method="post" novalidate autocomplete="off">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id', $order->id) }}" />

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="orderNumber">Order Number</label>
                                <input class="form-control" type="text" id="orderNumber"  name="orderNumber" 
                                    value="{{ old('orderNumber', $order->orderNumber) }}" readonly>

                            </div>
                            <div class="form-group col-sm-4">
                                <label for="order_date">Order Date</label>
                                <input class="form-control" type="text" id="order_date" name="order_date" 
                                    value="<?php
                                            $date = date_create(old('order_date', $order->order_date));
                                            echo date_format($date, "Y/m/d"); 
                                        ?>" readonly />
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="status">Order status</label>
                                <input class="form-control" type="text" id="status" name="status" 
                                    value="{{ old('status', $order->status) }}" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label>User</label>
                                <input class="form-control" type="text" name="user" 
                                    value="{{ $user->firstName . ' '. $user->lastName }}" readonly>
                            </div>

                            <div class="form-group col-sm-4">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" id="email" name="email" 
                                    value="{{ old('email', $order->email) }}">
                                @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-sm-4">
                                <label>Points Applied</label>
                                <input class="form-control" type="text" name="pointsApplied" readonly 
                                    value="{{ old('pointsApplied', $order->pointsApplied) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="billing_address">Billing address</label>
                            <input class="form-control" type="text" id="billing_address" name="billing_address" 
                                value="{{ old('billing_address', $order->billing_address) }}">
                            @error('billing_address')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="shipping_address">Shipping address</label>
                            <input class="form-control" type="text" id="shipping_address" name="shipping_address" 
                                value="{{ old('shipping_address', $order->shipping_address) }}">
                            @error('billing_address')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Qty</th>
                                </tr>

                                @foreach($orderlines as $line)

                                <tr>
                                    <td>{{ $line->id }}</td>
                                    <td>{{ $line->product->name }}</td>
                                    <td>
                                        <input class="form-control unitprice" type="text" id="{{$line->id}}" 
                                            name="unitprice{{$line->id}}" 
                                            value="{{ old('unitprice'.$line->id, $line->unitprice) }}">
                                        @error('unitprice'.$line->id)
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" id="quantity{{$line->id}}" 
                                            name="quantity{{$line->id}}" 
                                            value="{{ old('quantity'.$line->id, $line->quantity) }}">
                                        @error('quantity'.$line->id)
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label>&nbsp;</label>
                                <input type="button" class="form-control btn btn-secondary" 
                                    value="Recalculate" onclick="recalculate();" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label >Province</label>
                                <input class="form-control" type="text" name="province_name" 
                                    value="{{ $province->name }}" readonly>

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="gst">GST rate</label>
                                <input class="form-control" type="text" id="gst" name="gst" 
                                    value="{{ $tax->gst }}" readonly>

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="pst">PST rate</label>
                                <input class="form-control" type="text" id="pst" name="pst" 
                                    value="{{ $tax->pst }}" readonly>

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="hst">HST rate</label>
                                <input class="form-control" type="text" id="hst" name="hst" 
                                    value="{{ $tax->hst }}" readonly>

                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label for="totalGST">GST</label>
                                <input class="form-control" type="text" id="totalGST" name="totalGST" 
                                    value="<?php echo number_format((float)old('totalGST', $order->totalGST), 2, '.', ''); ?>">
                                @error('totalGST')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="totalPST">PST</label>
                                <input class="form-control" type="text" id="totalPST" name="totalPST" 
                                    value="<?php echo number_format((float)old('totalPST', $order->totalPST), 2, '.', ''); ?>">
                                @error('totalPST')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="form-group col-sm-3">
                                <label for="totalHST">HST</label>
                                <input class="form-control" type="text" id="totalHST" name="totalHST" 
                                    value="<?php echo number_format((float)old('totalHST', $order->totalHST), 2, '.', ''); ?>">
                                @error('totalHST')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-sm-3">
                                <label for="totaltax">Total Tax</label>
                                <input class="form-control" type="text" id="totaltax" name="totaltax" 
                                    value="<?php echo number_format((float)old('totaltax', $order->totaltax), 2, '.', ''); ?>">
                                @error('totaltax')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label for="auth_code">Transaction Auth Code</label>
                                <input class="form-control" type="text" id="auth_code" name="auth_code" 
                                    value="{{ $response->auth_code }}" readonly>

                            </div>
                            <div class="form-group col-sm-4">
                                <label for="totalAmount">Total Amount</label>
                                <input class="form-control" type="text" id="totalAmount" name="totalAmount" 
                                    value="<?php echo number_format((float)old('totalAmount', $order->totalAmount), 2, '.', ''); ?>">
                                @error('totalAmount')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection