@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}</div>

                <div class="card-body">

                    <p>
                        <a class="btn btn-success " href="/admin/categories/create">Create a new category</a>
                    </p>
                
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Actions</th>
                        </tr>

                        @foreach($cats as $cat)

                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->type }}</td>
                                <td class="td-btn">
                                    <a class="btn btn-primary btn-sm" href="/admin/categories/edit/{{ $cat->id }}">Edit</a>&nbsp;
                                    <form style="display: inline" class="form-inline" 
                                            action="/admin/categories/delete/{{ $cat->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$cat->id}}" />
                                        <a href="/admin/categories"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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