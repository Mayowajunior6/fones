@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2>Edit a Offer</h2>
                </div>

                <div class="card-body">

                    <p><a href="/admin/offers" class="btn btn-warning">Back</a></p>

                    <form id="offer_form" class="form" action="/admin/offers/edit/{{ $offer->id }}" 
                        method="post" novalidate autocomplete="off">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id', $offer->id) }}" />
                        <div class="form-group">
                                <label for="description">Offer Description</label>
                            <input class="form-control" id="description" type="text" name="description" 
                                value="{{ old('description', $offer->description) }}">
                            @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select class="custom-select" name="product_id">
                                <option value="">Select a Product</option>
                                @foreach($products as $product)

                                <option <?= (old('product_id', $offer->product_id) == $product->id) ? 'selected' : '' ?>
                                    value="{{ $product->id }}">{{ $product->name }}</option>

                                @endforeach
                            </select>
                            @error('product_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class="custom-select" name="carrier_id">
                                <option value="">Select a Carrier</option>
                                @foreach($carriers as $carrier)

                                <option <?= (old('carrier_id', $offer->carrier_id) == $carrier->id) ? 'selected' : '' ?>
                                    value="{{ $carrier->id }}">{{ $carrier->name }}</option>

                                @endforeach
                            </select>
                            @error('carrier_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="points">Points</label>
                            <input class="form-control" id="points" type="text" name="points" 
                                value="{{ old('points', $offer->points) }}">
                            @error('points')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
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