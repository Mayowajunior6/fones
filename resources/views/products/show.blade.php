@extends('layouts/products')

@section('content')

<script>
function imageswap(color,image){       

          if(document.images){
             document.images['largephone'].src = "/storage/images/products/" + image;
            }
       }
   </script>

<div class="container">

	<div class="row">

	    <div class="col-lg-3" >
		    <form class="form-inline" method="get">
                  <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                  
            </form>

		    <h3 class="my-4 green" style="font-size: 1.2em;">Colors</h3>
		    <div class="">

			    @foreach($cats_color as $color)
			        <a href="/category/{{$color->name}}" class="categories"> {{ $color->name }}</a>
			    @endforeach

		      <!-- <a href="#" class="list-group-item active">Lenovo</a>
		      <a href="#" class="list-group-item">Iphone</a>
		      <a href="#" class="list-group-item">Samsung</a>
		      <a href="#" class="list-group-item">Nokia</a>
		      <a href="#" class="list-group-item">Xiomi</a> -->
		    </div>
		    <h3 class="my-4 green" style="font-size: 1.2em;">Operating System</h3>
		    <div class="list-group">
		    	@foreach($product_os as $os)
			      <a href="/category/{{$os->operatingSystem}}" class="list-group-item">{{$os->operatingSystem}}</a>
			    @endforeach
		    </div>
		    <h3 class="my-4 green" style="font-size: 1.2em;">Brand</h3>
		    <div class="list-group">
		        @foreach($cats_brand as $brand)
			        <a href="/category/{{$brand->name}}" class="list-group-item"> {{ $brand->name }}</a>
			    @endforeach
		    </div>
	    </div>
	  <!-- /.col-lg-3 -->

	  <div class="col-lg-9"  style="float: right">

	    <div class="card mt-4">
	      <div class="thumbnail-div">
	       <!--  <div class="smaall-image">
	            <div>
	              <img class="thumbnail" src="images/detail-image-1.jpg" alt="">
	            </div>
	            <div>
	              <img class="thumbnail" src="images/detail-image-1.jpg" alt="">
	            </div>
	            <div>
	              <img class="thumbnail" src="images/detail-image-1.jpg" alt="">
	            </div>
	            <div>
	              <img class="thumbnail" src="images/detail-image-1.jpg" alt="">
	            </div>
	        </div> -->
	     
	        <div class="image-detail">
	            <div class="large-image">	            


              <img id="largephone" class="responsive card-img-top img-fluid" src="/storage/images/products/{{$product->images[0]->image}}" alt="">


	            </div>
	            <div class="sub-image-detail">
		            <h3>
		            	{{  $product->name }}
		            <!-- Samsung Galaxy S20 Fan Edition - 128GB -->
		            </h3>
		            <h4 style="color:red;">CND ${{ $product->unitprice }}</h4>
		            <div id="colours">colours</div>

		            @foreach($product_colors as $color_option)
		            	@if($color_option['name'] == 'White')		            	
		            	<div style="cursor: pointer" onclick="imageswap('White','<?= $image=$productimages->where('color','=','White')->first()->image?>')" class="white_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Silver')
		            		<div style="cursor: pointer" onclick="imageswap('Silver','<?= $image=$productimages->where('color','=','Silver')->first()->image?>')" class="silver_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Red')
		            		<div style="cursor: pointer" onclick="imageswap('Red','<?= $image=$productimages->where('color','=','Red')->first()->image?>')" class="red_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Black')
		            		<div style="cursor: pointer"  onclick="imageswap('Black','<?= $image=$productimages->where('color','=','Black')->first()->image?>')" class="black_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Blue')
		            		<div style="cursor: pointer" onclick="imageswap('Blue','<?= $image=$productimages->where('color','=','Blue')->first()->image?>')" class="blue_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Green')
		            		<div style="cursor: pointer" onclick="imageswap('Green','<?= $image=$productimages->where('color','=','Green')->first()->image?>')" class="green_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Pink')
		            		<div style="cursor: pointer" onclick="imageswap('Pink','<?= $image=$productimages->where('color','=','Pink')->first()->image?>')" class="pink_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Grey')
		            		<div style="cursor: pointer" onclick="imageswap('Grey','<?= $image=$productimages->where('color','=','Grey')->first()->image?>')"  class="grey_phone"></div>
		            	@endif
		            	@if($color_option['name'] == 'Orange')
		            		<div onclick="imageswap('Orange','<?= $image=$productimages->where('color','=','Orange')->first()->image?>')"  class="orange_phone"></div>
		            	@endif
		            @endforeach
		            

		            <br/><br/><br/>
		            <div id="memory">Internal Memory</div> 
		            <div class="memory-1">{{ $product->memory }}</div>
		            <div class="spacer"></div>
		            <!-- <a href="#"><div class="memory-2">{{ $product->memory }}</div></a> -->
		             <!-- <br/><br/><br/> -->
		            <!-- <div id="memory"> -->
		            	<form method="post" class="add_to_cart" action="/addCart">
		                    <!-- <label class="dropdownmenu" for="qty">Qty</label> -->
		                    <select class="dropdownmenu"  name="qty">
		                        <option value="1">1</option>
		                        <option value="2">2</option>
		                        <option value="3">3</option>
		                    </select> &nbsp;
		                    <input type="hidden" name="action" value="add" />
		                    <input type="hidden" name="product_id" value="<?=$product->id;?>" />
		                    @csrf
		                    <input style="max-width: 200px; width: 100%;" type="submit" class="btn-lg green" value="Add to Cart" />
		                </form>
		              <!-- <button id="btn" type="button" class="btn-lg btn btn-primary">Add To Cart</button>   -->
		            <!-- </div>   -->
	            </div>
	        <table class="table table-striped">
                <tbody>
                	@foreach($carriers as $carrier)
		            <tr>
		                <th scope="row">
		                  <img class="carrier" alt="carrier logos" src="/storage/images/carriers/{{ $carrier->logo}}">
		                </th>
		                <td style="font-size: 0.1vw">{{ $carrier->name}}</td>
		                <td style="color:#d40202; font-weight:700;">
			                   <sup >Earn</sup>
			                   {{ $points }}
		                </td>
		                <td>
		                    <small>
		                        2-year Plan<br/>
		                       SmartPay®<br/>
		                    </small>
		                </td>
		            </tr>	
		            @endforeach	           
                </tbody>
	        </table>
	        </div> 
	        <!-- End image-detail -->
	      </div>
	    </div>
	    <!-- /.card -->
	  </div>
	  <!-- /.col-lg-9 -->
	</div>
	</div>
	<!-- /.container -->
	<div class="container" style="margin-bottom: 3%;">
	     <div class="row">
	        <div class="card-body col-lg-12">
	        <h3 class="card-title">About This Item</h3>
	        <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
	        4.0 stars
	        <table class="table table-2">
	          <thead>
	            <tr>
	              <th scope="col">First</th>
	              <th scope="col">Last</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>Dimensions</td>
	              <td>{{  $product->dimensions }}</td>
	            </tr>
	            <tr>
	              <td>Weight</td>
	              <td>{{  $product->weight }}</td>
	            </tr>
	            <tr>
	              <td>Operating System</td>
	              <td>{{  $product->operatingSystem }}</td>
	            </tr>
	            <tr>
	              <td>Display Size</td>
	              <td>{{  $product->displaysize }}</td>
	            </tr>
	            <tr>
	              <td>Camera</td>
	              <td>
	                {{  $product->camera }}
	              </td>
	            </tr>
	            <tr>
	              <td>Pixel</td>
	              <td>
	                {{  $product->pixel }}
	              </td>
	            </tr>
	            <tr>
	              <td>Memory</td>
	              <td>
	                {{  $product->memory }}
	              </td>
	            </tr>
	            <tr>
	              <td>Features</td>
	              <td>
	                {{  $product->longdescription }}
	              </td>
	            </tr>
	          </tbody>
	        </table>

	        
	      </div>

	     <h3 class="similar_items_header">Similar Items</h3>
	     <div class="card-deck similar_items col-lg-12" style="padding-bottom: 3%;">
			<div class="card header_container" style="width: 100%; padding-bottom: 3%;">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    @if(count($productswithsimilarcat)>0)


			    <ol class="carousel-indicators">
			    @if(count($productswithsimilarcat) < 4)
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    @endif

			    @if(count($productswithsimilarcat) > 3 && count($productswithsimilarcat)<8)
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			    @endif

			     @if(count($productswithsimilarcat) > 7)
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    @endif
			    </ol>
			    @endif

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">

			    	 <div class="carousel-item active">
			    	 	<div style="display: flex">
			    	 	@for($i = 0; $i < count($productswithsimilarcat); $i++) 
			    	 	 @if($i<4)
			    	 	<a href="/products/{{$productswithsimilarcat[$i]->slug}}">
			    	 		<img style="margin-left: 5%" class="similar-thumb" src="/storage/images/products/{{$productswithsimilarcat[$i]->images[0]->image}}" alt="slider image1">
			    	 	</a>
		       
			          <div style="flex: 25%; padding-top: 50px">
			            <p>
				           <a href="/products/{{$productswithsimilarcat[$i]->slug}}">{{$productswithsimilarcat[$i]->name}}</a><br/>{{$productswithsimilarcat[$i]->images[0]->color}}<br/>
				         </p>

				         <span class="similar-price">$CDN {{$productswithsimilarcat[$i]->unitprice}}</span>
				       </div>      
	               @endif
			      @endfor
			      	</div>
			      </div>   

			      <!-- carousel slide 2 -->
			      @if(count($productswithsimilarcat)>3)
			      <div class="carousel-item">
			       	<div style="display: flex">
			      @endif
			    	 	@for($i = 0; $i < count($productswithsimilarcat); $i++) 
			    	 	 @if($i>3 && $i<8) 

			    	 	<a href="/products/{{$productswithsimilarcat[$i]->slug}}">
			    	 		<img style="margin-left: 5%" class="similar-thumb" src="/storage/images/products/{{$productswithsimilarcat[$i]->images[0]->image}}" alt="slider image1">
			    	 	</a>
		       
			          <div style="flex: 25%; padding-top: 50px">
			            <p>
				           <a href="/products/{{$productswithsimilarcat[$i]->slug}}">{{$productswithsimilarcat[$i]->name}}</a><br/>{{$productswithsimilarcat[$i]->images[0]->color}}<br/>
				         </p>

				         <span class="similar-price">$CDN {{$productswithsimilarcat[$i]->unitprice}}</span>
				       </div>      
	               @endif
			      @endfor
			      	</div>
			      </div>   

			      <!-- carousel slide 3 -->
	        
			    @if(count($productswithsimilarcat)>7)
			       <div class="carousel-item">
			       	<div style="display: flex">
			       	@endif
			    	 	@for($i = 0; $i < count($productswithsimilarcat); $i++) 
			    	 	 @if($i>7)
			    	 	 	
			    	 	<a href="/products/{{$productswithsimilarcat[$i]->slug}}">
			    	 		<img style="margin-left: 5%" class="similar-thumb" src="/storage/images/products/{{$productswithsimilarcat[$i]->images[0]->image}}" alt="slider image1">
			    	 	</a>
		       
			          <div style="flex: 25%; padding-top: 50px">
			            <p>
				           <a href="/products/{{$productswithsimilarcat[$i]->slug}}">{{$productswithsimilarcat[$i]->name}}</a><br/>{{$productswithsimilarcat[$i]->images[0]->color}}<br/>
				         </p>

				         <span class="similar-price">$CDN {{$productswithsimilarcat[$i]->unitprice}}</span>
				       </div>      
	               @endif
			      @endfor
			      	</div>
			      </div>   
			      
			     
			          
           </div>

		    </div>
		</div>


</div>

	
	    </div>
	    <!-- /.card -->       
     </div>


@stop()