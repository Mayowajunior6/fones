@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2>Edit the Product</h2>
                </div>

                <div class="card-body">

                    <p><a href="/admin/products" class="btn btn-warning">Back</a></p>

                    <form id="createproduct" class="form" action="/admin/products/edit/{{$products->id}}" method="post" novalidate autocomplete="on" enctype="multipart/form-data">
                        @csrf

                        @method('PUT')
                        <div class="form-group" ><!-- Product Name Starts -->
                                <label for="name">Product Name</label>
                            <input class="form-control" type="text" name="name" 
                            value="{{ old('name', $products->name) }}">
                            @error('name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Product Name Ends -->

                        <div class="form-group">
                            <div class="form-check">
                                <input type="hidden" name="is_available" value="0" />
                                <input class="form-check-input" type="checkbox" value="1" 
                                    id="is_available" name="is_available" 
                                    <?= (old('is_available') == '0' ) ? '' : 'checked' ?>>
                                <label class="form-check-label" for="is_available">
                                   Available
                                </label>
                                @error('is_available')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group" ><!-- Dimensions Starts -->
                                <label for="dimensions">Dimensions</label>
                            <input class="form-control" type="text" name="dimensions"
                              value="{{ old('dimensions', $products->dimensions) }}">
                            @error('dimensions')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Dimensions ends -->

                        <div class="form-group" ><!-- Weight Starts -->
                                <label for="weight">Weight</label>
                            <input class="form-control" type="text" name="weight" 
                            value="{{ old('weight', $products->weight) }}">
                            @error('weight')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Weight ends -->


                        <div class="form-group"><!-- Operating System Starts -->
                            <label>Operating System</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operatingSystem" id="iOSRadio" value="iOS" 
                                    <?= ($products->operatingSystem == 'iOS') ? 'checked' : '' ?> >
                                <label class="form-check-label" for="iOSRadio">
                                    iOS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operatingSystem" id="AndroidRadio" value="Android"
                                    <?= ($products->operatingSystem == 'Android') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="AndroidRadio">
                                    Android
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operatingSystem" id="otherRadio" value="other"
                                    <?= ($products->operatingSystem == 'other') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="otherRadio">
                                    Other
                                </label>
                            </div>
                            @error('operatingSystem')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Operating System ends -->

                        <div class="form-group" ><!-- Display Size Starts -->
                                <label for="displaysize">Display Size</label>
                            <input class="form-control" type="text" name="displaysize" 
                            value="{{ old('displaysize', $products->displaysize) }}">
                            @error('displaysize')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Display Size ends -->    

                        <div class="form-group" ><!-- Camera Starts -->
                                <label for="camera">Camera</label>
                            <input class="form-control" type="text" name="camera" 
                            value="{{ old('camera', $products->camera) }}">
                            @error('camera')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!--Camera ends -->                        

                        <div class="form-group"><!-- Short Desc Starts -->
                            <label for="shortdescription">Short Description</label>
                            <input class="form-control" type="text" name="shortdescription" 
                            value="{{ old('shortdescription', $products->shortdescription) }}">
                            @error('shortdescription')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Short Desc Ends -->

                        <div class="form-group"><!-- Long Desc Starts -->
                            <label for="longdescription">Long Description</label>
                            <input class="form-control" type="text" name="longdescription" 
                            value="{{ old('longdescription', $products->longdescription) }}">
                            @error('longdescription')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Long Desc Ends -->

                        <div class="form-group"><!-- Pixel Starts -->
                            <label for="pixel">Pixel</label>
                            <input class="form-control" type="text" name="pixel" 
                            value="{{ old('pixel', $products->pixel) }}">
                            @error('pixel')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Pixel Ends -->

                        <div class="form-group"><!-- Unit Price Starts -->
                            <label for="unitprice">Unit Price</label>
                            <input class="form-control" type="text" name="unitprice" 
                            value="{{ old('unitprice', $products->unitprice) }}">
                            @error('unitprice')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Unit Price Ends -->

                        <div class="form-group"><!-- Memory Starts -->
                            <label for="memory">Memory</label>
                            <input class="form-control" type="text" name="memory" 
                            value="{{ old('memory', $products->memory) }}">
                            @error('memory')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Memory Ends -->   

                        <div class="form-group"><!-- Image Starts -->
                            <label for="image">Image</label>
                            @if($products->images[0]->image)
                            <div>
                                <img style="margin:10px; height: 400px; width: 280px;" 
                                src="/storage/images/products/{{ $products->images[0]->image}}" alt=""> 
                            </div>
                            @endif
                            <input type="file" name="image">
                            @error('image')
                                <div class="alert alert-danger">
                                        {{ $message }}
                                </div>
                            @enderror
                        </div><!-- Image Ends -->


                        <div class="form-group">
                            <!-- Color Starts -->
                        <label for="cats_color_id">Product Color</label>
                            <!-- <input class="form-control" type="text" name="color" value=""> -->
                            <select class="form-control" id="cats_color_id" name="cats_color_id">
                                @foreach($cats_colors as $cats_color)
                                
                                    <option <?= (old('cats_color_id', $product_color->id) == $cats_color->id) ? 'selected' : '' ?>
                                    
                                    value="{{ $cats_color->id }}">{{ $cats_color->name }}</option>
                                @endforeach
                            </select>
                            @error('cats_color_id')
                            <div class="alert alert-danger">
                            </div>
                            @enderror
                        </div>
                        <!-- Color Ends -->
                        <label for="cats_brand_id">Category as Brand</label>
                            
                            <select class="form-control" id="cats_brand_id" name="cats_brand_id">
                                @foreach($cats_brands as $cats_brand)
                                    <option <?= (old('cats_brand_id', $brand->id) == $cats_brand->id) ? 'selected' : '' ?>
                                    value="{{ $cats_brand->id }}">{{ $cats_brand->name }}</option>
                                @endforeach
                            </select>
                            @error('cats_brand_id')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!-- Color Ends  -->

                        <!-- Product color Starts -->
                       <!--   <div class="form-group" >
                                <label for="color">Product Color</label>
                            <input class="form-control" type="text" name="color" value="{{ $products->color}}">
                            @error('color')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                        <!-- Product color Ends -->

                        <div class="form-group"><!-- Product ID Starts -->
                            <input class="form-control" type="hidden" id="product_id"  name="product_id" >
                        </div><!-- Product ID Ends -->  

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