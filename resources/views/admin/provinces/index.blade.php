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
                    <p>
                        <a href="/admin/provinces/create"  class="btn btn-success">Add a new province</a>
                    </p>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($provinces as $province)
                                <tr>
                                    <td>{{ $province->name }}</td>
                                    <td class="td-btn">
                                        <a class="btn-primary btn-sm" href="/admin/provinces/edit/{{ $province->id }}">Edit</a>
                                        <form style="display:inline" 
                                              class="form-inline" 
                                              action="/admin/provinces/delete/{{$province->id}}" 
                                              method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $province->id}}" />
                                            <a href="/admin/provinces" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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
