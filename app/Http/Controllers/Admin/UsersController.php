<?php
/**
 * Controller for Admin Users crud
 * @file UsersController.php
 * @author  Shristi Malekoo <malekoo-s@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-7
 */

namespace App\Http\Controllers\Admin;

use App\User;
use App\UserAddress;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Province;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $userAddresses = UserAddress::all();
        $provinces = Province::all();

        return view('admin/users/index', compact('users', 'userAddresses', 'provinces'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $userAddresses = UserAddress::pluck('billingAddress');
        $provinces = Province::pluck('name','id');
        return view('admin/users/create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $valid = $request->validate([
            'firstName' => 'bail|required|string',
            'lastName' => 'bail|required|string',
            'email' => 'bail|required|string|email|max:255|unique:users',
            'phone' => 'bail|required|digits:10',
            'password' => 'bail|required'

            
        ]);


        $valid2 = $request->validate([

            'address1' => 'bail|required|string',
            'address2' => 'bail|required|string',
            'city' => 'bail|required|string',
            'province_id' => 'bail|required',
            'postal' => 'bail|required',
            'country' => 'bail|required|string'
 
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'isAdmin' => 0,
            'points' => 0,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
            ]);

        UserAddress::create([
            'user_id' => $user->id,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'postal' => $request->postal,
            'province_id' => $request->province_id,
            'country' => $request->country,
            'shippingAddress' => 0,
            'billingAddress' => 1,
        ]);

        UserAddress::create([
            'user_id' => $user->id,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'city' => $request->city,
            'postal' => $request->postal,
            'province_id' => $request->province_id,
            'country' => $request->country,
            'shippingAddress' => 1,
            'billingAddress' => 0,
        ]);


       session()->flash('success', 'User was successfully added.');
       
        return redirect('/admin/users');
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
        $user = User::find($id);
        $userAddresses = UserAddress::all();
        $provinces = Province::all();
   
        foreach($userAddresses as $userAddress){
            
            if($userAddress->billingAddress == 1) {
                $billingAddress = $userAddress;
                $billingProvince = UserAddress::find($userAddress->province_id)->province;
            }
        }

        return view('admin/users/edit', compact('user','userAddresses', 'provinces', 'billingAddress', 'billingProvince'));
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
            'firstName' => 'bail|required|string',
            'lastName' => 'bail|required|string',
            'email' => 'bail|required|string|email|max:255',
            'phone' => 'bail|required|digits:10'
           
        ]);

        $billData = $request->validate([
            'address1' => 'bail|required|max:255',
            'address2' => 'bail|required|max:255',
            'city' => 'bail|required|max:255',
            'postal' => 'bail|required|max:255',
            'province_id' => 'bail|required',
            'country' => 'bail|required|max:255'
            ]);

        // dd($request);


        $user = User::find($valid['id']);
        // dd($user);

        if ($user->update($valid)) {
            $userAddresses = User::find($id)->userAddress;
            foreach($userAddresses as $address){
                if($address->billingAddress == 1) {
                $billingAddress = $address;
                if($billingAddress->update($billData)) {
                session()->flash('success', 'Profile was successfully Updated!');
                } else {
                session()->flash('error', 'There was a problem updating your profile. Contact IT.');
                }
                }
            }
            session()->flash('success', 'User was successfully updated.');
        } else {
            session()->flash('error', 'System error when updating user record');
        }
        return redirect('/admin/users');
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

        $user_del = User::find($id);

        if ($user_del->delete()) {
            session()->flash('success', 'The user was successfully deleted.');
        } else {
            session()->flash('error', 'System error when deleting user record');
        }
        return redirect('/admin/users');
    }
}
