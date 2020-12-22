@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">

                    <p>
                        <a class="btn btn-success" href="/admin/users/create">Create</a>
                    </p>
                
                    <table class="table table-striped" style="max-width: 960px; width: 100%; font-size: 0.8vw;">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Province</th>
                            <th>Postal</th>
                            <th>Country</th>
                            <th>Actions</th>
                        </tr>

                        @foreach($users as $user)
                          

                            <tr>
                                <td>{{ $user->firstName }}</td>
                                <td>{{ $user->lastName }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                @foreach($userAddresses as $address)
                                    @if($user->id == $address->user_id && $address->billingAddress == 1)
                                    <td>{{ $address->address1 }}</td>
                                    <td>{{ $address->city }}</td>
                                    <td>{{ $address->province['name'] }}</td>
                                    <td>{{ $address->postal }}</td>
                                    <td>{{ $address->country }}</td>
                                    @endif
                                @endforeach
                               
                               
                                <td class="td-btn">
                                    <a style="font-size: 10px;" class="btn btn-primary btn-sm" href="/admin/users/edit/{{ $user->id }}">Edit</a>&nbsp;
                                    <form style="display: inline" class="form-inline" 
                                            action="/admin/users/delete/{{ $user->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$user->id}}" />
                                        <a href="/admin/users" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection