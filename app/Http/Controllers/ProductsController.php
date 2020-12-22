<?php

namespace App\Http\Controllers;

use App\Carrier;
use App\Category;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    /**
     * Redirecting the home page to list view of phones page
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $products = Product::latest()->paginate(6);
        $products = Product::with('images')->orderBy('id')->paginate(6);

        $cats_color     = Category::where('type', '=', 'Color')->orderBy('name', 'ASC')->get();
        $category_brand = Category::where('type', '=', 'Brand')->orderBy('name', 'ASC')->get();
        $product_os     = Product::with('images')->distinct()->get('operatingSystem');
        // $products = Product::with('categories')->where('id')->orderBy('id')->get();
        // dd($product_image);
        $title          = 'Best Products Available';
        $search         = $this->request->get('search');
        $product_search = Product::where('name', 'like', '%' . $search . '%')->orWhere('operatingSystem', 'like', '%' . $search . '%')->orderBy('id')->paginate(6);
        // return view('blog.index',['blogs' => $blogs]);
        return view('products/index', ['products' => $product_search], compact('products', 'title', 'cats_color', 'category_brand', 'product_os'));
    }

    /**
     * [category describes the content with the catgory selection and in the url
     * it will show the ctegory name insted of category id]
     * @param  String $name
     * @return \Illuminate\Http\Response
     */

    public function category($name)
    {
        // $products=Category::find(13)->products()->get();
        // $products=Category::with('products')->where('name','=','Google')->get();

        $cat = Category::where('name', $name)->first();
        if ($name != 'iOS' && $name != 'Android') {
            $products = $cat->products()->with('images')->get();

            if ($cat['type'] == 'Color') {
                for ($i = 0; $i < count($products); $i++) {
                    $images = $products[$i]['images'];

                    if (count($images) >= 1) {
                        $new_images = [];
                        for ($j = 0; $j < count($images); $j++) {
                            if ($images[$j]['color'] == $name) {
                                $new_images[] = $images[$j];
                            }
                        }
                        // dd($new_images);
                        if (!empty($new_images)) {
                            $products[$i]['images'] = $new_images;
                        }
                    }
                }
            }
            // dd($products);
        } else {

            $products = Product::where('operatingSystem', '=', $name)->get();
        }
        // dd($products);
        $title          = 'Categories';
        $cats_color     = Category::where('type', '=', 'Color')->orderBy('name', 'ASC')->get();
        $category_brand = Category::where('type', '=', 'Brand')->orderBy('name', 'ASC')->get();
        $product_os     = Product::with('images')->distinct()->get('operatingSystem');
        $search         = $this->request->get('search');
        if ($search != null)
         {
            $products       = Product::with('images')->orderBy('id')->paginate(6);

            $title          = 'Best Products Available';

            $cats_color     = Category::where('type', '=', 'Color')->orderBy('name', 'ASC')->get();
            $category_brand = Category::where('type', '=', 'Brand')->orderBy('name', 'ASC')->get();
            $product_os     = Product::with('images')->distinct()->get('operatingSystem');
            $products       = Product::with('images')->orderBy('id')->paginate(6);
            $product_search = Product::where('name', 'like', '%' . $search . '%')->orWhere('operatingSystem', 'like', '%' . $search . '%')->orderBy('id')->paginate(6);
            return view('products/index', ['products' => $product_search], compact('products', 'title', 'cats_color', 'category_brand', 'product_os'));

        } 
        else 
        {
            return view('products/category', compact('products', 'title', 'cats_color', 'category_brand', 'product_os'));
        }
    }

    /**
     * Show function to redirect to detail page
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        //get similar item products
        $productimages=Product::find($product->id)->images()->get();
        $productimages->where('color','=','Green')->first();
       // dd($productimages->where('color','=','Green')->first()->image);
        
        $productcategories      = Product::find($product->id)->categories()->get();
        $brand                  = $productcategories->where('type', '=', 'Brand')->first();
        $productswithsimilarcat = $brand->products()->with('images')->get();
        $product_colors = $productcategories->where('type', '=', 'Color');
        // dd($product_colors[0]['name']);
        //
        // dd($product);die;
        $cats       = Category::orderBy('name', 'ASC')->get();
        $cats_color = Category::where('type', '=', 'Color')->orderBy('name', 'ASC')->get();
        $cats_brand = Category::where('type', '=', 'Brand')->orderBy('name', 'ASC')->get();
        $carriers   = Carrier::orderBy('name', 'ASC')->get();
        // $offers = Offer::orderBy('id', 'ASC')->with('carrier_id')->get();

        // $users = DB::table('users')->where('options->language', 'en')->get();
        // $product = Product::with('images')->orderBy('id')->paginate(6);

        $offers = DB::table('offers')->where('product_id', $product->id)->first();
        // dd($offers->points);
        $points = 0;
        if (!empty($offers)) {
            $points = $offers->points;
        }

        $product_os = Product::with('images')->distinct()->get('operatingSystem');

        $search = $this->request->get('search');

        if ($search != null) 
        {
            $products       = Product::with('images')->orderBy('id')->paginate(6);

            $title          = 'Best Products Available';

            $cats_color     = Category::where('type', '=', 'Color')->orderBy('name', 'ASC')->get();

            $category_brand = Category::where('type', '=', 'Brand')->orderBy('name', 'ASC')->get();
            
            $product_os     = Product::with('images')->distinct()->get('operatingSystem');
            $products       = Product::with('images')->orderBy('id')->paginate(6);
            $product_search = Product::where('name', 'like', '%' . $search . '%')->orWhere('operatingSystem', 'like', '%' . $search . '%')->orderBy('id')->paginate(6);
            return view('products/index', ['products' => $product_search], compact('products', 'title', 'cats_color', 'category_brand', 'product_os'));
        } else {

            return view('products/show', compact('product', 'cats_color', 'cats_brand', 'carriers', 'product_os', 'points', 'productswithsimilarcat', 'product_colors','productimages'));
        }
    }
}
