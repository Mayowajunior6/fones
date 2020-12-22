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
                    <a href="/admin/carriers/create"  class="btn btn-success">Add a new carrier</a>
                    <hr />
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carriers as $carrier)
                            <tr>
                                <td><img style="width:50px" alt="Carrier Logos" src="/storage/images/carriers/{{ $carrier->logo }}" /></td>
                                <td>{{ $carrier->name }}</td>
                                <td class="td-btn">
                                    <a class="btn-primary btn-sm" href="/admin/carriers/edit/{{ $carrier->id }}">Edit</a>
                                    <form style="display:inline" 
                                          class="form-inline" 
                                          action="/admin/carriers/delete/{{$carrier->id}}" 
                                          method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $carrier->id}}" />
                                        <a href="/admin/users"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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
