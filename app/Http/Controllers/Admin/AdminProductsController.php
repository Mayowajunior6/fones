<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductImage;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductsController extends Controller
{
    /**
     * Index page redirect
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title    = "Products";
        $products = Product::with('images')->get();
        // dd($products[0]->images);
        return view('admin/products/index', compact('title', 'products'));
    }
    /**
     * Create page redirect
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title          = "Create";
        $products       = Product::all();
        $cats_color     = Category::where('type', '=', 'Color')->orderBy('name', 'ASC')->get();
        $category_brand = Category::where('type', '=', 'Brand')->orderBy('name', 'ASC')->get();
        $product_os     = Product::with('images')->distinct()->get('operatingSystem');
        return view('admin/products/create', compact('title', 'products', 'cats_color', 'category_brand', 'product_os'));
    }

    /**
     * [store for storing data to the db]
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request['slug'] = Str::slug($request->name, '-');

        $valid = $request->validate([
            'name'             => 'bail|required|string',
            'slug'             => 'nullable',
            'is_available'     => 'bail|required',
            'dimensions'       => 'bail|required|string',
            'weight'           => 'bail|required|numeric',
            'operatingSystem'  => 'bail|required',
            'displaysize'      => 'bail|required|string',
            'camera'           => 'bail|required|integer',
            'shortdescription' => 'bail|required|string',
            'longdescription'  => 'bail|required|string',
            'pixel'            => 'bail|required|string',
            'unitprice'        => 'bail|required|numeric',
            'memory'           => 'bail|required|string',
        ]);
        


        $validImage = $request->validate([                        

            'image' => 'nullable|image',
        ]);
        // dd('HIE');

        // dd($request['image']);
        // Convert original name to a unique new name for saving
        $orig_name = $request->file('image')->getClientOriginalName();
        $new_name  = Str::slug(now(), '-') . '_' . $orig_name;



        //get product_color
        $product_color=Category::where('id','=',$request->type)->first();
       // dd($product_color->name);

        // Save the file
        $request->file('image')->storeAs('public/images/products', $new_name);

        // Save the filename in the database record
        $validImage['image'] = $new_name;

        $product = Product::create($valid);
        // dd($product);
        // dd($product->id);
        if ($product) {
            $validImage['product_id'] = $product->id;


            
            $imagecolor = DB::table('product_images')->insert(['product_id' => $product->id, 'image' => $new_name, 'color' => $product_color->name, 'created_at' => now()]);
            $storecolor = DB::table('product_categories')->insert(['product_id' => $product->id, 'category_id' => $request->brand_type]);

            // dd($validateCategory);
            $storebrand = DB::table('product_categories')->insert(['product_id' => $product->id, 'category_id' => $request->type]);

            // dd("Hello");
            session()->flash('success', 'Product was successfully added.');
        } else {
            session()->flash('error', 'System error when creating product');
        }
        return redirect('/admin/products');
    }

    /**
     * delete a record from the database table
     * @param  \Illuminate\Http\Request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'bail|required|integer',
        ]);

        $product = Product::find($id);

        if ($product->delete()) {
            $product->images()->delete();

            // $product->categories()->delete();

            DB::table('product_categories')->where('product_id', $id)->delete();

            session()->flash('success', 'The product was successfully deleted.');
        } else {
            session()->flash('error', 'System error when deleting product record');
        }
        return redirect('/admin/products');
    }

    /**
     * get a single record from the database and send the data to a page for editing
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $brand    = $products->categories()->where('type', '=', 'Brand')->first();
        // dd($brand->id);

        $product_color = $products->categories()->where('type', '=', 'Color')->first();
        // dd($product_color->id);
        $cats_colors    = Category::where('type', '=', 'Color')->orderBy('name', 'ASC')->get();
        $cats_brands = Category::where('type', '=', 'Brand')->orderBy('name', 'ASC')->get();
        $product_os     = Product::with('images')->distinct()->get('operatingSystem');
        return view('admin/products/edit', compact('products', 'cats_colors', 'cats_brands', 'product_os', 'brand', 'product_color'));
    }

/**
 * update a specific record in the database
 * @param  \Illuminate\Http\Request $request
 * @param  int $id
 * @return \Illuminate\Http\Response
 */
    public function update(Request $request, $id)
    {
        $request['slug'] = Str::slug($request->name, '-');

        $valid = $request->validate([
            'name'             => 'bail|required|string',
            'slug'             => 'nullable',
            'is_available'     => 'bail|required',
            'dimensions'       => 'bail|required|string',
            'weight'           => 'bail|required|numeric',
            'operatingSystem'  => 'bail|required',
            'displaysize'      => 'bail|required|string',
            'camera'           => 'bail|required|integer',
            'shortdescription' => 'bail|required|string',
            'longdescription'  => 'bail|required|string',
            'pixel'            => 'bail|required|string',
            'unitprice'        => 'bail|required|numeric',
            'memory'           => 'bail|required|string',

        ]);

        $validImage = $request->validate([
            // 'product_id' => 'bail|required|integer',
            // 'type' => 'bail|required',
            // 'color' => 'bail|required|string',
            'image' => 'nullable|image'
        ]);
        // dd($validImage);
            $products = Product::find($id);
        if ($request->file('image')) {
            $orig_name = $request->file('image')->getClientOriginalName();
            $new_name  = Str::slug(now(), '-') . '-' . $orig_name;
            $request->file('image')->storeAs('public/images/products', $new_name);
            $validImage['image'] = $new_name;
        }
        else{

            $new_name = $products->images()->first()->image;
            // dd($new_name);
        }

        // $products = Product::find($id);
        $product_color=Category::where('id','=',$request->cats_color_id)->first();
        $cats_color = Category::find($request->cats_color_id);
        // $product_color=Category::where('id','=',$request->type)->first();

        $validImage['color'] = $cats_color->name;
        // dd($request->cats_color_id);
        // dd($products);
        // dd($valid);
        // dd($validImage);
        $product_categories = $products->categories()->get();
        // dd($product_categories);

        if ($products->update($valid)) {

            // $products->update($validImage);

            // ProductImage::update($validImage);
            // dd($product->id);
            // dd($validateCategory);
           
            DB::table('product_images')
                ->where('product_id', $id)
                ->limit(1) // optional - to ensure only one record is updated.
                ->update(array('color' => $product_color->name,'image' => $new_name, 'updated_at' => now()));

            
            DB::table('product_categories')
                ->where('category_id', $product_categories[0]->id)
                ->where('product_id', $id) //
                ->limit(1) // optional - to ensure only one record is updated.
                ->update(array('category_id' => $request->cats_brand_id));

            DB::table('product_categories')
                ->where('category_id', $product_categories[1]->id)
                ->where('product_id', $id) //
                ->limit(1) // optional - to ensure only one record is updated.
                ->update(array('category_id' => $request->cats_color_id));
            // if ($products->update($valid)) {
            session()->flash('success', 'Product was successfully updated.');
        } else {
            session()->flash('error', 'System error when updating product record');
        }
        return redirect('/admin/products');
    }
}
