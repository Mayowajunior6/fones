@extends('layouts/products')

@section('content')
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Update info</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#history" data-toggle="tab" class="nav-link">Order History</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h5 class="mb-3">User Profile</h5>
                        <div class="row">
                            <div class="col-md-9">
                                <h6>First Name:</h6>
                                <p>
                                    {{ $user->firstName }}
                                </p>
                                <h6>Last Name:</h6>
                                <p>
                                    {{ $user->lastName }}
                                </p>
                                <h6>Email:</h6>
                                <p>
                                    {{ $user->email }}
                                </p>
                                <h6>Phone:</h6>
                                <p>
                                    {{ $user->phone }}
                                </p>
                                <h6>Points:</h6>
                                <p>
                                    {{ $user->points }}
                                </p>
                                <h6>Shipping Address:</h6>
                                <p>
                                    {{ $shippingAddress->address1." ".$shippingAddress->address2." ".$shippingAddress->city." ".$shippingProvince->name." ".$shippingAddress->country }}
                                </p>
                                <h6>Billing Address:</h6>
                                <p>
                                    {{ $billingAddress->address1." ".$billingAddress->address2." ".$billingAddress->city." ".$billingProvince->name." ".$billingAddress->country }}
                                </p>
                                
                            </div>
                           
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="edit">
                        <form role="form" action="/profile/edit/{{ $user->id }}" method="post" enctype="multipart/form-data" novalidate>
                            @csrf

                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="firstName" type="text" value="{{ old('firstName', $user->firstName) }}">
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('firstName')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="lastName" type="text" value="{{ $user->lastName }}">
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('lastName')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="email" type="email" value="{{ $user->email }}">
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('email')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="phone" type="text" value="{{ $user->phone }}">
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('phone')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Address:</label>
                                <div class="col-lg-3">
                                    <input class="form-control" name="address1" type="text" value="{{ $billingAddress->address1 }}" placeholder="No">
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control" name="address2" type="text" value="{{ $billingAddress->address2 }}" placeholder="Street">
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('address1')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                                @error('address2')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-6">
                                    <input class="form-control" name="city" type="text" value="{{ $billingAddress->city }}" placeholder="City">
                                </div>
                                <div class="col-lg-3">
                                    <input class="form-control" name="postal" type="text" value="{{ $billingAddress->postal }}" placeholder="Postal">
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('city')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                                @error('postal')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <select name="province_id" class="form-control">
                                        <option value="0">Select Province</option>
                                        @foreach($provinces as $province)
                                            <option value='{{ $province->id }}' {{ ( $province->id == $billingProvince->id) ? 'selected' : '' }}>{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('province_id')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="country" type="text" value="{{ $billingAddress->country }}" placeholder="Country">
                                </div>
                                <label class="col-lg-4 col-form-label form-control-label"></label>
                                @error('country')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Tick For Shipping Address:</label>
                                <div class="col-lg-6">
                                    <input class="form-check-input" type="checkbox" value="1" name="forShipingAddress">
                                </div>
                                @error('forBillingAddress')
                                  <div class="alert alert-danger">
                                        {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <!-- Second address was removed here -->
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="history">
                        <article class="card">
                            <header class="card-header"> My Orders / Tracking </header>
                            <div class="card-body">



                                @foreach($orders as $order)
                                    <h6>Order ID: {{$order->orderNumber}}</h6>
                                    <article class="card">
                                        <div class="card-body row">
                                            <div class="col"> <strong>Estimated Delivery:</strong> <br>4 Business days </div>
                                            <div class="col"> <strong>Status:</strong> <br> {{$order->status}} </div>
                                            <div class="col"> <strong>Order Date:</strong> <br> {{$order->order_date}} </div>
                                        </div>
                                    </article>
                                    <div class="track">
                                        <div> <strong> Points Applied: </strong> {{$order->pointsApplied}}</div>
                                        <div> <strong> Total Tax: </strong> ${{$order->totaltax}}</div>
                                        <div> <strong>Total Amount: </strong> ${{$order->totalAmount}}</div>
                                        <div> <strong>Shipping Address: </strong> {{$order->shipping_address}}</div>
                                    </div>
                                    <hr>
                                @endforeach
                                <hr>
                                <a href="/products" class="btn btn-warning" data-abc="true"> Back to shoping</a>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                <img src="{{$gravatar}}" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <!-- <h6 class="mt-2">Upload a different photo</h6> -->
                <!-- Image upload will not be implemented in the phase -->
                <!-- <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control">Choose file</span>
                </label> -->
            </div>
        </div>
    </div>
@stop()