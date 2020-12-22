@extends('layouts.products')
@section('content')
<div class="container" style="margin-top: 2%; margin-bottom: 3%; border: 1px solid #333; padding: 3%;">
    <h1 class="shipping_heading responsive_header">Order Summary</h1>

    <p><strong style="font-size: 1.2em;">{{$orderName}}</strong>, Your order has been placed.</br>
    Thank you for shopping with us.</br> Your Order is on the way.</p>
    <p style="font-weight: bold">Shipping Address</p>

    <p>{{$order->shipping_address}}</p>
    <img src="/storage/images/general_images/delivery.png" alt="delivery">


    
    <h5 style="margin-top: 5%;">Review your order: {{$order->orderNumber}}</h5>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Cost</th>
                
            </tr>
        </thead>
        <tbody>
          <?php  $subtotal=0;?>
          <!-- FOREACH LOOP -->
          @foreach($orderLineItems as $item)
          <tr>
            <td>{{ $item->product->name}}</td>
            <td><?php echo number_format((float)$item->unitprice, 2, '.', ''); ?></td>
            <td>{{ $item->quantity }}</td>
            <td><?php echo number_format((float)$item->unitprice * $item->quantity, 2, '.', ''); ?></td>
            
            <?php $subtotal+=$item->unitprice * $item->quantity ?>
        </tr>
        @endforeach
        <!-- END FOREACH LOOP -->
        <tr>
            <th>SUBTOTAL</th>
            <th></th>
            <th></th>
            <th><?php echo number_format((float)$subtotal, 2, '.', ''); ?></th>
            <th></th>               
        </tr>
        <tr>
            <td style="color:green">SHIPPING</td>
            <th></th>
            <th></th>
            <td style="color:green">FREE</td>
            <th></th>                
        </tr>
        @if($order->totalGST>0)
        <tr>
            <td> GST</td>
            <th></th>
            <th></th>
            <th>$<?php echo number_format((float)$order->totalGST, 2, '.', ''); ?></th>
            <th></th>                
        </tr>
        @endif
        @if($order->totalPST>0)
        <tr>
            <td> PST</td>
            <th></th>
            <th></th>
            <th>$<?php echo number_format((float)$order->totalPST, 2, '.', ''); ?></th>
            <th></th>                
        </tr>
        @endif
        @if($order->totalHST>0)
        <tr>
            <td> HST</td>
            <th></th>
            <th></th>
            <th>$<?php echo number_format((float)$order->totalHST, 2, '.', ''); ?></th>
            <th></th>                
        </tr>
        @endif
        <tr>
            <td style="color:green"> Points Applied  - {{$order->pointsApplied}}</td>
            <th></th>
            <th></th>
            <th style="color:green">-$<?php echo number_format((float)$order->pointsApplied/1000, 2, '.', ''); ?></th>
            <th></th>                
        </tr>
        <tr>
            <th>TOTAL AMOUNT</th>
            <th></th>
            <th></th>
            <th>$<?php echo number_format((float)$order->totalAmount, 2, '.', ''); ?></th>
            <th></th>                
        </tr>
    </tbody>
</table>

<p><a href="/products" class="btn btn-success" >Back to Shopping</a></p>




</div><!-- container -->

@endsection