@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __($title) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/admin/taxations" class="btn btn-warning">Back to the list</a>
                    <hr />
                    <form id="taxation_form" method="post" action="/admin/taxations/edit/{{ $taxation->id }}" class="form" novalidate 
                        autocomplete="off">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="province_id" class="col-lg-3 col-form-label form-control-label">Province Name: </label>
                            <select name="province_id" id="province_id">
                                <option value="">Select Province</option>
                                @foreach($provinces as $province)
                                    <option value='{{ $province->id }}' {{ ($province->id == $taxation->province_id) ? 'selected' : '' }}>{{ $province->name }}</option>
                                @endforeach
                            </select>
                            @error('province_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gst" class="col-lg-3 col-form-label form-control-label">GST: </label>
                            <input id="gst" type="text" name="gst" value="{{ old('gst', $taxation->gst) }}" />
                            @error('gst')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pst" class="col-lg-3 col-form-label form-control-label">PST: </label>
                            <input id="pst" type="text" name="pst" value="{{ old('pst', $taxation->pst) }}" />
                            @error('pst')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="hst" class="col-lg-3 col-form-label form-control-label">HST: </label>
                            <input id="hst" type="text" name="hst" value="{{ old('hst', $taxation->hst) }}" />
                            @error('hst')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="country" class="col-lg-3 col-form-label form-control-label">Country: </label>
                            <input id="country" type="text" name="country" value="{{ old('country', $taxation->country) }}" />
                            @error('country')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
