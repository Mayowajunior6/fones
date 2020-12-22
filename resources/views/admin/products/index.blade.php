@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">                                                               
                    <p>
                        <a href="/admin/products/create" class="btn btn-success">Add a new product</a>
                    </p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Weight</th>
                                <th>OS</th>
                                <th>Camera</th>
                                <th>Display Size</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td> {{ $product->id }} </td>
                                <td> {{ $product->name }}   </td>
                                <td> {{ $product->unitprice }} </td>
                                <td> {{ $product->weight }}   </td>
                                <td> {{ $product->operatingSystem }} </td>
                                <td> {{ $product->camera }}   </td>
                                <td> {{ $product->displaysize }} </td>
                                <td>
                                    
                                    <img class="responsive_img thumbnail-images card-img-top" style="height:60px; width: 30px;" 
                                        src="/storage/images/products/{{ $product->images[0]->image}}" alt="{{ $product->name }}"> 
                                   
                                </td>
                                <td class="td-btn">
                                    <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">Edit</a>&nbsp;
                                    <form style="display: inline" class="form-inline" 
                                            action="/admin/products/delete/{{ $product->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$product->id}}" />
                                        <a href="/admin/products" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection




