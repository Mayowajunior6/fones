<?php
/**
 * Controller for Carriers CRUD on admin panel
 * @file CarriersController.php
 * @author  Erik Brommell <brommell-e@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-07
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Carrier;
use Illuminate\Support\Str;

class CarriersController extends Controller
{
    /**
     * Display a list of all the records from the carriers table
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $title = "Carriers";
        $carriers = Carrier::all();
        return view('admin/carriers/index', compact('title', 'carriers'));
    }
    /**
     * Display a the page where the admin user can create a new carrier
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        $title = 'Add a new carrier';
        return view('admin/carriers/create', compact('title'));
    }
    /**
     * store a new record in the carriers table
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response       
     */
    public function store(Request $request) 
    {
        
        $valid = $request->validate([
            'name' => 'bail|required|max:255',
            'logo' => 'bail|required|image'
        ]);
        $orig_name = $request->file('logo')->getClientOriginalName();
        $new_name = Str::slug(now(), '-') . '_' . $orig_name;
        $request->file('logo')->storeAs('public/images/carriers', $new_name);
        $valid['logo'] = $new_name;

        if(Carrier::create($valid)) {
            session()->flash('success', 'The carrier was successfully added.');
        } else {
            session()->flash('error', 'There was a problem adding the carrier. Try again.');
        }
        return redirect('/admin/carriers');
    }
    /**
     * get the record the the user wants to edit
     * @param  int $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $title = "Edit a carrier";
        $carrier = Carrier::find($id);
        // dd($carrier);
        return view('admin/carriers/edit', compact('carrier', 'title'));
    }
    /**
     * update a record in the database
     * @param  \Illuminate\Http\Request $request 
     * @param  int  $id      
     * @return \Illuminate\Http\Response          
     */
    public function update(Request $request, $id)
    {

        $valid = $request->validate([
            'id' => 'bail|required|integer',
            'name' => 'bail|required|string',
            'logo' => 'bail|nullable|image'
        ]);

        $carrier = Carrier::find($valid['id']);
        if(!empty($valid['logo'])) {
            $orig_name = $request->file('logo')->getClientOriginalName();
            $new_name = Str::slug(now(), '-') . '_' . $orig_name;
            $request->file('logo')->storeAs('public/images/carriers', $new_name);
            $valid['logo'] = $new_name;
        }

        if($carrier->update($valid)) {
            session()->flash('success', 'The record was successfully updated');
        } else {
            session()->flash('error', 'There was a problem updating the record. Please try again.');
        }
        return redirect('admin/carriers');
    }
    /**
     * [destroy description]
     * @param  \Illuminate\Http\Request $request 
     * @param  int  $id      
     * @return \Illuminate\Http\Response    
     */
    public function destroy(Request $request, $id) 
    {
        $valid = $request->validate([
            'id' => 'bail|required|integer'
        ]);

        $carrier = Carrier::find($valid['id']);
        if($carrier->delete()) {
            session()->flash('success', 'The carrier was removed from the database.');
        } else {
            session()->flash('error', 'Could not complete your request. Please try again.');
        }
        return redirect()->back();
    }
}
