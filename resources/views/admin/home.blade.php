@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as Admin!') }}
                    <section>
                        <div class="row"  style="margin-top: 20px;">
                            <div class="col-md-4" >
                                <ul class="list-group dark">
                                  <li class="list-group-item list-group-item-success">Overview</li>
                                       <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Total Products
                                            <span class="badge badge-success badge-pill">{{$products_count}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Total Users
                                            <span class="badge badge-success badge-pill">{{$users_count}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Total Offers
                                            <span class="badge badge-success badge-pill">{{$offers_count}}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Total Orders
                                            <span class="badge badge-danger badge-pill">{{$orders_count}}</span>
                                        </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-group dark">
                                    <li class="list-group-item list-group-item-success">Top Users</li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{$topuser->firstName}}
                                        <span class="badge badge-success badge-pill">
                                             <?php echo number_format((float)$users_total[0]->amount , 2, '.', ''); ?>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="list-group dark">
                                  <li class="list-group-item list-group-item-success">Sales</li><li class="list-group-item d-flex justify-content-between align-items-center">
                                        Total Sales
                                        @if($sales == 0)
                                        <span class="badge badge-danger badge-pill">
                                        <?php echo number_format((float)$sales , 2, '.', ''); ?>
                                        </span>
                                        @else
                                        <span class="badge badge-success badge-pill">
                                        <?php echo number_format((float)$sales , 2, '.', ''); ?>
                                        </span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-group dark">
                                    <li class="list-group-item list-group-item-success">Products as per Operaing Systems</li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Android Devices

                                        <span class="badge badge-success badge-pill"> {{$and_product}}  </span>
                                    </li>
                                     <li class="list-group-item d-flex justify-content-between align-items-center">
                                         iOS Devices
                                       <span class="badge badge-success badge-pill"> {{$iOS_product}}</span>
                                    </li>
                                     <li class="list-group-item d-flex justify-content-between align-items-center">
                                         Other Operaing System Devices
                                        <span class="badge badge-danger badge-pill">{{$other_product}}  </span>
                                    </li>
                                </ul>
                            </div>
                        </div>       
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-8">
                                <ul class="list-group dark">
                                  <li class="list-group-item list-group-item-success">Users</li>
                                </ul>
                                <table class="table table-striped">
                                    <tr >
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>

                                    @foreach($users as $user)

                                        <tr>
                                            <td>{{ $user->firstName }}</td>
                                            <td>{{ $user->lastName }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-md-4">
                                <ul class="list-group dark">
                                  <li class="list-group-item list-group-item-success">Carriers</li>
                                </ul>
                                 <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">Logo</th>
                                          <th scope="col">Plan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($carriers as $carrier)
                                        <tr>
                                            <th scope="row">
                                              <img style="width:70px; height: 18px;" 
                                              class="carrier" alt="" src="/storage/images/carriers/{{ $carrier->logo}}">
                                            </th>
                                            <td>
                                                <small>
                                                    2-year Plan<br/>
                                                   SmartPay®<br/>
                                                </small>
                                            </td>
                                        </tr>   
                                        @endforeach            
                                    </tbody>
                                </table>
                               
                            </div>
                        </div>  
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group dark">
                                  <li class="list-group-item list-group-item-success">Top Selling Products</li>
                                </ul>

                                <table class="table">
                                  <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">O.S.</th>
                                        <th scope="col">Memory</th>
                                        <th scope="col">Weight</th>
                                        <th scope="col">Images</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <th scope="row">{{ $product->id  }}</th>
                                        <td>{{ $product->name  }}</td>
                                        <td>
                                            <?php echo number_format((float)$product->unitprice , 2, '.', ''); ?>
                                        </td>
                                        <td>{{ $product->operatingSystem  }}</td>
                                        <td>{{ $product->memory  }}</td>
                                        <td>{{ $product->weight  }}</td>
                                        <td>
                                            <img style="height:60px; width: 30px;" 
                                            class="responsive_img thumbnail-images card-img-top" 
                                            src="/storage/images/products/{{ $product->images[0]->image}}" alt=""> 
                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="text-align: center" class="col-md-12 list-group-item list-group-item-success">
                            Use Navigation Menu to see all the records <a href="#">Click Here to go on the top</a>
                        </div>                    
                        
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
