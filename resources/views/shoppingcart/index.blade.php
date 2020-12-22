@extends('layouts.products')
@section('content')
<div class="container my-5">
    <h1>SHOPPING CART</h1>

    @if (count($cart->getItems()) == 0)

    <h4>Your shopping cart is empty.</h4>
    <h4>Please add some products to the cart.</h4>
    @else

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Cost</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <!-- FOREACH LOOP -->
            @foreach($cart->getItems() as $item)
            <tr>
                <td>{{ $item->getName() }}</td>
                <td>{{ $item->getUnitPrice() }}</td>
                <td>{{ $item->getQty() }}</td>
                <td>{{ $item->getUnitPrice() * $item->getQty() }}</td>
                <td>
                    <form class="form_inline" method="post" action="/updateCart">
                        @method('PUT')
                        <input type="hidden" name="action" value="update" />
                        <input type="hidden" name="operator" value="minus" />
                        <input type="hidden" name="product_id" value="<?= $item->getId(); ?>" />
                        @csrf
                        <input type="submit" class="btn btn-outline-danger" value="-" />
                    </form>&nbsp;
                    <form class="form_inline" method="post" action="/updateCart">
                        @method('PUT')
                        <input type="hidden" name="action" value="update" />
                        <input type="hidden" name="operator" value="add" />
                        <input type="hidden" name="product_id" value="<?= $item->getId(); ?>" />
                        @csrf
                        <input type="submit" class="btn btn-outline-primary" value="+" />
                    </form>
                </td>
                <td><form class="form_inline" method="post" action="/updateCart">
                        @method('PUT')
                        <input type="hidden" name="action" value="delete" />
                        <input type="hidden" name="product_id" value="<?= $item->getId(); ?>" />
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Remove item" />
                    </form></td>
            </tr>
            @endforeach
            <!-- END FOREACH LOOP -->
            <tr>
                <th>SUB TOTAL</th>
                <th></th>
                <th></th>
                <th>{{ $cart->getSubTotal() }}</th>
                <th></th>
                <th></th>
            </tr>
        </tbody>
    </table>

    <p><a href="/checkout" class="btn btn-success" >Proceed to checkout</a></p>
    
    
    @endif


</div><!-- container -->

@endsection