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
                    <a href="/admin/carriers" class="btn btn-warning">Back to the list</a>
                    <hr />
                    <form method="post" action="/admin/carriers/edit/{{$carrier->id}}" class="form" novalidate autocomplete="off" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" value="{{old('id', $carrier->id)}}" />
                        <div class="form-group">
                            <label for="name">Name: </label>
                            <input id="name" type="text" name="name" value="{{ old('name', $carrier->name) }}" />
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo: </label>
                            <input id="logo" type="file" name="logo" value="{{ old('logo', $carrier->logo) }}" />
                            
                            <img style="width:50px;height:30px;" src="/storage/images/carriers/{{$carrier->logo}}" alt="the logo" />
                            
                            @error('logo')
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
