<?php

namespace App\Http\Controllers;

use App\Lib\CartItem;
use App\Lib\ShoppingCart;
use App\Product;
use Illuminate\Http\Request;
use App\Category;
// use Request;
class ShoppingCartController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the shopping cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cart = new ShoppingCart();
        // $item1 = new CartItem(1,'LG phone',120.0,1);
        // $item2 = new CartItem(2,'iPhone 11',220.0,3);
        // $cart->addItem($item1);
        // $cart->addItem($item2);
        // $cart->calculateTotal(0.05,0.07);

        if (session()->has('cart')) {
            $cart = session('cart');
        } else {
            $cart = new ShoppingCart();
        }
        
        // gst, pst , hst will be calculated in checkout controller.
        $cart->calculateTotal(0.0, 0.0, 0.0);

        return view('shoppingcart/index', compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->request = $request;
        $valid = $request->validate([
            'product_id' => 'bail|required|int',
            'qty' => 'bail|required|int'
        ]);

        $action = $_POST['action'] ?? '';
        if ($action == 'add') {

            $cart = null;
            if ($request->session()->has('cart')) {
                $cart = session('cart');
            } else {
                $cart = new ShoppingCart();
            }

            $product = Product::find($valid['product_id']);

            $item = new CartItem(
                $valid['product_id'],
                $product->name,
                $product->unitprice,
                intVal($valid['qty'])
            );
            $cart->addItem($item);
            $request->session()->put('cart', $cart);
            session()->flash('success','The item has been added to the shopping cart.');
        //      $products = Product::with('images')->orderBy('id')->paginate(6);

        // $cats_color = Category::where('type','=','Color')->orderBy('name','ASC')->get();
        // $category_brand = Category::where('type','=', 'Brand')->orderBy('name','ASC')->get();
        // $product_os = Product::with('images')->distinct()->get('operatingSystem');
        // // $products = Product::with('categories')->where('id')->orderBy('id')->get();
        // // dd($product_image);
        // $title = 'Best Products Available';
        
        // $search =$this->request->get('search');
        // $product_search = Product::where('name','like','%'.$search.'%')->orWhere('operatingSystem','like','%'.$search.'%')->orderBy('id')->paginate(6);
        
        //  return view('products/index', compact('products', ['products' => $product_search], 'title', 'cats_color', 'category_brand', 'product_os'));
        }

        return redirect($_SERVER['HTTP_REFERER']);
    }

    /**
     * Update the exsiting shopping cart.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $valid = $request->validate([
            'product_id' => 'bail|required|int',
        ]);

        $cart = null;
        if ($request->session()->has('cart')) {
            $cart = session('cart');
        } else {
            $cart = new ShoppingCart();
        }
        
        $action = $_POST['action'] ?? '';
        if ($action == 'update') {

            $operator = $_POST['operator'] ?? '';
            
            $items = $cart->getItems();
            for ($i =0 ; $i < count($items) ; $i++){
                $item = $items[$i];
                if ($items[$i]->getId() == $valid['product_id']) {
                    if ($operator == 'minus') {
                        $qty = $item->getQty();
                        if ($qty > 1) {
                            $qty--;
                            $item->setQty($qty);
                            $cart->addItem($item);
                            session()->flash('success','The item qty has been changed.');
                        } else {
                            session()->flash('error','The item only has 1 qty and cannot be reduced.');
                        }
                    } elseif ($operator == 'add') {
                        $qty = $item->getQty();
                        if ($qty < 3) {
                            $qty++;
                            $item->setQty($qty);
                            $cart->addItem($item);
                            session()->flash('success','The item qty has been changed.');
                        } else {
                            session()->flash('error','The item qty has already reached the maximum.');
                        }
                    }
                }
            }
        } else if ($action == 'delete') {
            
            if ($cart->removeItem($valid['product_id'])){
                session()->flash('success','The item qty has been removed.');
            } else {
                session()->flash('error','System error.  Please contact support');
            }
            
        }

        $request->session()->put('cart', $cart);

        return redirect('/cart');
    }
}
