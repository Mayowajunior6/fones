@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2>Edit a Category</h2>
                </div>

                <div class="card-body">

                    <p><a href="/admin/categories" class="btn btn-warning">Back</a></p>

                    <form id="category_form" class="form" action="/admin/categories/edit/{{ $cat->id }}" 
                            method="post" novalidate autocomplete="off">
                        @method('put')
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id', $cat->id) }}" />
                        <div class="form-group" >
                                <label for="name">Category Name</label>
                            <input class="form-control" id="name" type="text" name="name" value="{{ old('name', $cat->name) }}">
                            @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Type</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="brandRadio" value="Brand" 
                                    <?= (old('type', $cat->type) == 'Brand') ? 'checked' : '' ?> >
                                <label class="form-check-label" for="brandRadio">
                                    Brand
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="colorRadio" value="Color"
                                    <?= (old('type', $cat->type) == 'Color') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="colorRadio">
                                    Color
                                </label>
                            </div>
                            @error('type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input class="form-control" id="description" type="text" name="description" 
                                    value="{{ old('description', $cat->description) }}">
                            @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input type="hidden" name="active" value="0" />
                                <input class="form-check-input" type="checkbox" value="1" 
                                    id="active" name="active" 
                                    <?= (old('active', $cat->active) == '0' ) ? '' : 'checked' ?>>
                                <label class="form-check-label" for="active">
                                    Active Category
                                </label>
                                @error('active')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
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