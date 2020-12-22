<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();

        return view('admin/categories/index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$cats = Category::orderBy('name')->get();

        return view('admin/categories/create');
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
            'name' => 'bail|required|string',
            'type' => 'bail|required',
            'description' => 'bail|required|string',
            'active' => 'bail|required'
        ]);

        if (Category::create($valid)) {
            session()->flash('success', 'Category was successfully added.');
        } else {
            session()->flash('error', 'System error when creating category');
        }
        return redirect('/admin/categories');
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
        $cat = Category::find($id);

        return view('admin/categories/edit', compact('cat'));
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
            'name' => 'bail|required|string',
            'type' => 'bail|required',
            'description' => 'bail|required|string',
            'active' => 'bail|required'
        ]);

        $cat = Category::find($valid['id']);

        if ($cat->update($valid)) {
            session()->flash('success', 'Category was successfully updated.');
        } else {
            session()->flash('error', 'System error when updating category record');
        }
        return redirect('/admin/categories');
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

        $com = Category::find($id);

        if ($com->delete()) {
            session()->flash('success', 'The category was successfully deleted.');
        } else {
            session()->flash('error', 'System error when deleting category record');
        }
        return redirect('/admin/categories');
    }
}
