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
                        <a href="/admin/taxations/create" class="btn btn-success">Add a new taxation</a>
                    </p>
                    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Provinces ID</th>
                                <th>Provinces Name</th>
                                <th>GST</th>
                                <th>PST</th>
                                <th>HST</th>
                                <th>Country</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($taxations as $taxation)
                            <tr>
                                <td>{{ $taxation->province_id }}</td>
                                @foreach($provinces as $province)
                                    @if($province->id == $taxation->province_id)
                                        <td>{{ $province->name }}</td>
                                    @endif
                                @endforeach
                                <td>{{ $taxation->gst }}</td>
                                <td>{{ $taxation->pst }}</td>
                                <td>{{ $taxation->hst }}</td>
                                <td>{{ $taxation->country }}</td>
                                <td class="td-btn">
                                    <a class="btn-primary btn-sm" href="/admin/taxations/edit/{{ $taxation->id }}">Edit</a>
                                    <form style="display:inline" 
                                          class="form-inline" 
                                          action="/admin/taxations/delete/{{$taxation->id}}" 
                                          method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $taxation->id}}" />
                                        <a href="/admin/taxations" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
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
