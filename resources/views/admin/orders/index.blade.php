@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Orders') }}</div>

                <div class="card-body">

                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Order</th>
                            <th>Order Date</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>

                        @foreach($orders as $order)

                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->orderNumber }}</td>
                                <td><?php
                                    $date=date_create($order->order_date); 
                                    echo date_format($date,"Y/m/d");
                                ?></td>
                                <td>$<?php echo number_format((float)$order->totalAmount, 2, '.', ''); ?></td>
                                <td>{{ $order->status }}</td>
                                <td class="td-btn">
                                    <a class="btn btn-primary btn-sm" href="/admin/orders/edit/{{ $order->id }}">Edit</a>&nbsp;
                                    <form style="display: inline" class="form-inline" 
                                            action="/admin/orders/cancel/{{ $order->id }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$order->id}}" />

                                        @if ($order->status != 'Cancel')
                                        <button class="btn btn-danger btn-sm" 
                                            onclick="return confirm('Are you sure to cancel this order?');">Cancel</button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection