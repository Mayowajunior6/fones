@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Offers') }}</div>

                <div class="card-body">

                    <p>
                        <a class="btn btn-success " href="/admin/offers/create">Create a new offer</a>
                    </p>
                
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Product</th>
                            <th>Carrier</th>
                            <th>Points</th>
                            <th>Actions</th>
                        </tr>

                        @foreach($offers as $offer)

                            <tr>
                                <td>{{ $offer->id }}</td>
                                <td>{{ $offer->product->name }}</td>
                                <td>{{ $offer->carrier->name }}</td>
                                <td>{{ $offer->points }}</td>
                                <td class="td-btn">
                                    <a class="btn btn-primary btn-sm" href="/admin/offers/edit/{{ $offer->id }}">Edit</a>&nbsp;
                                    <form style="display: inline" class="form-inline" 
                                            action="/admin/offers/delete/{{ $offer->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$offer->id}}" />
                                        <a href="/admin/offers" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{ $offers->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection