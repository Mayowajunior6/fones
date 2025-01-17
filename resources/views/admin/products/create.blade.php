@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <div class="card">
                <div class="card-header">
                    <h2>Create New Product</h2>
                </div>

                <div class="card-body">

                    <p><a href="/admin/products" class="btn btn-warning">Back</a></p>

                    <form id="createproduct" class="form" action="\admin\products" method="post" novalidate autocomplete="on" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" ><!-- Product Name Starts -->
                                <label for="name">Product Name</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
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
                                    <?=(old('is_available') == '0') ? '' : 'checked'?>>
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
                            <input class="form-control" type="text" name="dimensions" value="{{ old('dimensions') }}">
                            @error('dimensions')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Dimensions ends -->

                        <div class="form-group" ><!-- Weight Starts -->
                                <label for="weight">Weight</label>
                            <input class="form-control" type="text" name="weight" value="{{ old('weight') }}">
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
                                    <?=(old('operatingSystem') == 'iOS') ? 'checked' : ''?> >
                                <label class="form-check-label" for="iOSRadio">
                                    iOS
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operatingSystem" id="AndroidRadio" value="Android"
                                    <?=(old('operatingSystem') == 'Android') ? 'checked' : ''?>>
                                <label class="form-check-label" for="AndroidRadio">
                                    Android
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="operatingSystem" id="otherRadio" value="other"
                                    <?=(old('operatingSystem') == 'other') ? 'checked' : ''?>>
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
                            <input class="form-control" type="text" name="displaysize" value="{{ old('displaysize') }}">
                            @error('displaysize')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Display Size ends -->

                        <div class="form-group" ><!-- Camera Starts -->
                                <label for="camera">Camera</label>
                            <input class="form-control" type="text" name="camera" value="{{ old('camera') }}">
                            @error('camera')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!--Camera ends -->

                        <div class="form-group"><!-- Short Desc Starts -->
                            <label for="shortdescription">Short Description</label>
                            <input class="form-control" type="text" name="shortdescription" value="{{ old('shortdescription') }}">
                            @error('shortdescription')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Short Desc Ends -->

                        <div class="form-group"><!-- Long Desc Starts -->
                            <label for="longdescription">Long Description</label>
                            <input class="form-control" type="text" name="longdescription" value="{{ old('longdescription') }}">
                            @error('longdescription')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Long Desc Ends -->

                        <div class="form-group"><!-- Pixel Starts -->
                            <label for="pixel">Pixel</label>
                            <input class="form-control" type="text" name="pixel" value="{{ old('pixel') }}">
                            @error('pixel')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Pixel Ends -->

                        <div class="form-group"><!-- Unit Price Starts -->
                            <label for="unitprice">Unit Price</label>
                            <input class="form-control" type="text" name="unitprice" value="{{ old('unitprice') }}">
                            @error('unitprice')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Unit Price Ends -->

                        <div class="form-group"><!-- Memory Starts -->
                            <label for="memory">Memory</label>
                            <input class="form-control" type="text" name="memory" value="{{ old('memory') }}">
                            @error('memory')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div><!-- Memory Ends -->

                        <div class="form-group"><!-- Image Starts -->
                                <label for="image">Image</label>
                                <!-- <input id="image" type="file"  name="image" value="{​​​​{​​​​ old('image') }​​​​}​​​​" /> -->
                                <input type="file" name="image">
                                @error('image')
                                    <div class="alert alert-danger">
                                            {{ $message }}
                                    </div>
                                @enderror
                        </div><!-- Image Ends -->

                        <!-- Image Type Starts -->
                        <!-- <div class="form-group">
                            <label for="type">Image Type</label>

                            <select id="type" name="type">
                                <option value="main">Main</option>
                                <option value="thumbnail">Thumbnail</option>
                                <option value="other">Others</option>
                            </select>
                            @error('type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                        <!-- Image Type Ends -->

                        <div class="form-group">
                            <!-- Color Starts -->
                        <label for="type">Color</label>


                            <!-- <input class="form-control" type="text" name="color" value=""> -->
                            <select class="form-control" id="type" name="type">
                                @foreach($cats_color as $color)
                                    <option value="{{ $color->id }}" selected="selected">{{ $color->name }}</option>
                                @endforeach
                            </select>
                            @error('type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                      <!--   </div> -->
                        <!-- Color Ends -->

                        </div><!-- Color Ends -->


                        <div class="form-group">
                        <label for="brand_type">Brand</label>
                        </div>
                            <!-- <input class="form-control" type="text" name="color" value=""> -->
                            <select class="form-control" id="brand_type" name="brand_type">
                                @foreach($category_brand as $brand)
                                    <option value="{{ $brand->id }}" selected="selected">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        <!-- </div> -->
                        <!-- Color Ends  -->


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