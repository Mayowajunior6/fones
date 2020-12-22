<?php
/**
 * Controller for Admin Provinces crud
 * @file ProvincesController.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-5
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Province;

class ProvincesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Provinces";
        $provinces = Province::all();
        return view('admin/provinces/index', compact('title', 'provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add a new province';
        return view('admin/provinces/create', compact('title'));
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
            'name' => 'bail|required|alpha|max:255'
        ]);

        if(Province::create($valid)) {
            session()->flash('success', 'The province was successfully added.');
        } else {
            session()->flash('error', 'There was a problem adding the province. Please Try again.');
        }
        return redirect('admin/provinces/create');
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
        $title = 'Edit province';

        $province = Province::find($id);

        return view('admin/provinces/edit', compact('province', 'title'));
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
            'name' => 'bail|required|alpha|string'
        ]);

        $province = Province::find($id);

        if ($province->update($valid)) {
            session()->flash('success', 'Province was successfully updated.');
        } else {
            session()->flash('error', 'System error when updating province record');
        }
        return redirect('/admin/provinces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $province = Province::find($id);
        $province->taxation()->delete();

        if ($province->delete()) {
            session()->flash('success', 'The province was successfully deleted.');
        } else {
            session()->flash('error', 'System error when deleting province record');
        }
        return redirect('/admin/provinces');
    }
}
