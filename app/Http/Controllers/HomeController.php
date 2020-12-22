<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Carrier;
use App\ProductImage;
use App\User;
use App\Offer;
use App\Order;
use DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * it returns to the dashboard on the Admin panel 
     * which goes the aggregate functions
     * @return [type] [description]
     */
    public function handleAdmin()
    {
        $products = Product::with('images')->orderBy('unitprice', 'DESC')->paginate(9);
        $carriers = Carrier::orderBy('name' , 'ASC')->get();
        $users = User::all();
        $users_count = DB::table('users')->count();

        $users_total = Order::select(\DB::raw('user_id, sum(`totalAmount`) as amount'))->groupBy('user_id')->orderBy('amount', 'DESC')->get();
        $topuser_id = $users_total[0]->user_id;
        $topuser = User::find($topuser_id);
        // dd($topuser);
        $products_count = DB::table('products')->count();
        $offers_count = DB::table('offers')->count();
        $orders_count = DB::table('orders')->count();
        // $sales = DB::table('orders')->max('orders_count');
        $sales = DB::table('orders')->sum('totalAmount');
        $and_product = Product::where('operatingSystem' ,'=', 'Android')->count();
        $iOS_product = Product::where('operatingSystem' ,'=', 'iOS')->count();
        $other_product = Product::where('operatingSystem' ,'=', 'other')->count();
        return view('admin.home', compact('products', 'carriers', 'users', 'users_count', 'products_count', 'offers_count','orders_count','sales','and_product','iOS_product','other_product','topuser','users_total'));
    } 
}
