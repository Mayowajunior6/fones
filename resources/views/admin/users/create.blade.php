@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/admin/users"  class="btn btn-warning">Back</a>
                    <hr />
                    <form method="post" action="/admin/users" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="firstName" class="col-lg-3 col-form-label form-control-label">First Name: </label>
                            <input id="firstName" type="text" name="firstName" value="{{ old('firstName') }}" />
                            @error('firstName')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="lastName" class="col-lg-3 col-form-label form-control-label">Last Name: </label>
                            <input id="lastName" type="text" name="lastName" value="{{ old('lastName') }}" />
                            @error('lastName')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-lg-3 col-form-label form-control-label">Email: </label>
                            <input id="email" type="text" name="email" value="{{ old('email') }}" />
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-lg-3 col-form-label form-control-label">Password: </label>
                            <input id="password" type="password" name="password" value="{{ old('password') }}" />
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone" class="col-lg-3 col-form-label form-control-label">Phone: </label>
                            <input id="phone" type="text" name="phone" value="{{ old('phone') }}" />
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address1" class="col-lg-3 col-form-label form-control-label">Address 1: </label>
                            <input id="address1" type="text" name="address1" value="{{ old('address1') }}" />
                            @error('address1')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address2" class="col-lg-3 col-form-label form-control-label">Address 2: </label>
                            <input id="address2" type="text" name="address2" value="{{ old('address2') }}" />
                            @error('address2')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-lg-3 col-form-label form-control-label">City: </label>
                            <input id="city" type="text" name="city" value="{{ old('city') }}" />
                            @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="province_id" class="col-lg-3 col-form-label form-control-label">Province:</label>
                            <select name="province_id" size="0">
                                <option value="">Select Province</option>
                                @foreach($provinces as $key => $province)
                                    <option value='{{ $key }}' @if($key == old('province_id')) selected @endif>{{ $province }}</option>
                                @endforeach
                            </select>
                            @error('province_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="postal" class="col-lg-3 col-form-label form-control-label">Postal: </label>
                            <input id="postal" type="text" name="postal" value="{{ old('postal') }}" />
                            @error('postal')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="country" class="col-lg-3 col-form-label form-control-label">Country: </label>
                            <input id="country" type="text" name="country" value="{{ old('country') }}" />
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
