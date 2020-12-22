<?php
/**
 * Controller for Admin Taxations crud
 * @file TaxationsController.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-7
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Taxation;
use App\Province;

class TaxationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Taxations";
        $provinces = Province::all();
        $taxations = Taxation::all();
        return view('admin/taxations/index', compact('title', 'taxations', 'provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add a new taxation';
        $provinces = Province::pluck('name','id');
        return view('admin/taxations/create', compact('title', 'provinces'));
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
            'province_id' => 'bail|required',
            'gst' => 'bail|required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'pst' => 'bail|required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'hst' => 'bail|required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'country' => 'bail|required|alpha|max:255'
        ]);

        if(Taxation::create($valid)) {
            session()->flash('success', 'The taxation was successfully added.');
        } else {
            session()->flash('error', 'There was a problem adding the taxation. Please Try again.');
        }
        return redirect('admin/taxations/create');
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
        $title = 'Edit taxation';

        $provinces = Province::all();

        $taxation = Taxation::find($id);

        return view('admin/taxations/edit', compact('provinces', 'taxation', 'title'));
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
            'province_id' => 'bail|required',
            'gst' => 'bail|required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'pst' => 'bail|required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'hst' => 'bail|required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'country' => 'bail|required|alpha|max:255'
        ]);

        $taxation = Taxation::find($id);

        if ($taxation->update($valid)) {
            session()->flash('success', 'Taxation was successfully updated.');
        } else {
            session()->flash('error', 'System error when updating taxation record');
        }
        return redirect('/admin/taxations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taxation = Taxation::find($id);

        if ($taxation->delete()) {
            session()->flash('success', 'The taxation was successfully deleted.');
        } else {
            session()->flash('error', 'System error when deleting taxation record');
        }
        return redirect('/admin/taxations');
    }
}
