@extends('layouts/products')

@section('content')


        <div class="container">
                <!-- <h1 class="site-heading-upper text-primary mb-3">{{$title}}</h1> -->
            <div class="row">

               <div class="col-lg-3" >
                <form class="form-inline" method="get">
                  <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                </form>
                <h3 class="my-4 green" style="font-size: 1.2em;">Colors</h3>
                <div class="list-group">
                  @foreach($cats_color as $color)
                  <a href="/category/{{$color->name}}" class="list-group-item">{{$color->name}}</a>
                  @endforeach
                </div>
                <h3 class="my-4 green" style="font-size: 1.2em;">Operating System</h3>
                <div class="list-group">
                  @foreach($product_os as $os)
                    <a href="/category/{{$os->operatingSystem}}" class="list-group-item">{{$os->operatingSystem}}</a>
                  @endforeach
                </div>
                <h3 class="my-4 green" style="font-size: 1.2em;">Brand</h3>
                <div class="list-group">
                  @foreach($category_brand as $brand)
                  <a href="/category/{{$brand->name}}" class="list-group-item">{{$brand->name}}</a>
                  @endforeach
                  <!-- <a href="#" class="list-group-item">Silver</a>
                  <a href="#" class="list-group-item">Green</a>
                  <a href="#" class="list-group-item">Rose Gold</a> -->
                </div>
              </div>
              <!-- /.col-lg-3 -->

              <div class="col-lg-9">

           <!--    $table->string('name',255);
            $table->string('slug', 255);
            $table->tinyInteger('is_available')->default('1');            
            $table->string('dimensions',45);
            $table->float('weight', 8, 2);
            $table->enum('operatingSystem', ['iOS', 'Android','other']);
            $table->string('displaysize',255);
            $table->integer('camera');
            $table->mediumText('shortdescription');
            $table->longText('longdescription');
            $table->string('pixel',255);
            $table->string('memory',45);      
 -->
                <div class="row">
                  @foreach($products as $product)
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="/products/{{$product->slug}}"><img class="responsive_img thumbnail-images card-img-top" src="/storage/images/products/{{$product->images[0]->image}}" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="/products/{{$product->slug}}">{{$product->name}}</a>
                        </h4>
                        <p class="card-text">{{Str::limit($product->shortdescription,100)}}</p>
                      </div>
                      <div class="card-footer">
                        <h5 style="color: red;">CDN ${{$product->unitprice}}.00</h5>
                      </div>
                      <div class="card-footer">
                        <a href="/products/{{$product->slug}}" class="btn btn-primary">View Details</a>
                      </div>
                    </div>
                  </div>
                   @endforeach
              </div>
                
                <!-- /.row -->

              </div>
              <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->

            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center mb-7">
                <li class="page-item mb-7">
                    {{$products->links()}} 
                </li>
              </ul>
            </nav>
            </div>
         <!--  </div>
        </div>-->


@stop()