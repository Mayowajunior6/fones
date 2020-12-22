<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Offer;
use App\Carrier;
use App\Product;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::with('product', 'carrier')->paginate(10);

        return view('admin/offers/index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add a new offer';

        $carriers = Carrier::all();
        $products = Product::all();

        return view('admin/offers/create', compact('title', 'carriers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'description' => 'bail|required|max:255',
            'product_id' => 'bail|required|integer',
            'carrier_id' => 'bail|required|integer',
            'points' => 'bail|required|integer'
        ]);
        
        if(Offer::create($valid)) {
            session()->flash('success', 'The offer was successfully added.');
        } else {
            session()->flash('error', 'There was a problem adding the offer. Try again.');
        }
        return redirect('/admin/offers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        $carriers = Carrier::all();
        $products = Product::all();

        return view('admin/offers/edit', compact('offer','products','carriers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'bail|required|integer',
            'description' => 'bail|required|string',
            'product_id' => 'bail|required',
            'carrier_id' => 'bail|required|string',
            'points' => 'bail|required'
        ]);

        $offer = Offer::find($valid['id']);

        if ($offer->update($valid)) {
            session()->flash('success', 'Offer was successfully updated.');
        } else {
            session()->flash('error', 'System error when updating offer record');
        }
        return redirect('/admin/offers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $valid = $request->validate([
            'id' => 'bail|required|integer'
        ]);

        $offer = Offer::find($id);

        if ($offer->delete()) {
            session()->flash('success', 'The offer was successfully deleted.');
        } else {
            session()->flash('error', 'System error when deleting offer record');
        }
        return redirect('/admin/offers');
    }
}
