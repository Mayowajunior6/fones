@extends('layouts.products')
@section('content')
<div class="container">
    <div class="message_404" style="background-color:#ddd">
        Oops! We were not able to find the page you requested. Please continue shopping on our <a href="/products">Products Page</a>.
    </div>
    <div>
        <img class="image_404" src="/storage/images/404/404.png" alt="404 error page not found" />
    </div>

</div>
@endsection