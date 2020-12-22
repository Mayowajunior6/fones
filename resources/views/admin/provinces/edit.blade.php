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
                    <a href="/admin/provinces"  class="btn btn-warning">Back to the list</a>
                    <hr />

                    <form id="province_form" method="post" action="/admin/provinces/edit/{{ $province->id }}" 
                        class="form" novalidate autocomplete="off" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="name">Province Name: </label>
                            <input id="name" type="text" name="name" value="{{ old('name', $province->name) }}" />
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection