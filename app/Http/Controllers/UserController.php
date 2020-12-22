<?php
/**
 * Controller for User
 * @file UserController.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-2
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserAddress;
use App\Province;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gravatar = Auth::user()->gravatar;
        $orders = Auth::user()->order()->get();
        $userAddresses = User::find(Auth::user()->id)->userAddress;
        $provinces = Province::all();
        $user = Auth::user();

        foreach($userAddresses as $address){
            if($address->shippingAddress == 1) {
                $shippingAddress = $address;
                $shippingProvince =UserAddress::find($address->province_id)->province;
            }
            if($address->billingAddress == 1) {
                $billingAddress = $address;
                $billingProvince = UserAddress::find($address->province_id)->province;
            }
        }

        return view('profile', compact('gravatar', 'user', 'userAddresses', 'shippingAddress', 'billingAddress', 'shippingProvince', 'billingProvince', 'provinces', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //dd($request->has('forBillingAddress'));
         $data = $request->validate([
            'firstName' => 'bail|required|max:255',
            'lastName' => 'bail|required|max:255',
            'email' => 'required|email',
            'phone' => 'required|digits:10'
        ]);

        $user = User::find($id);
        if($user->update($data)) {
            //session()->flash('success', 'Profile was successfully Updated!');
            if($request->has('forShipingAddress'))
             {
                $shipData = $request->validate([
                    'address1' => 'bail|required|max:255',
                    'address2' => 'bail|required|max:255',
                    'city' => 'bail|required|max:255',
                    'postal' => 'bail|required|max:255',
                    'province_id' => 'bail|required',
                    'country' => 'bail|required|max:255'
                ]);

                $userAddresses = User::find($id)->userAddress;
               foreach($userAddresses as $address){
                    if($address->shippingAddress == 1) {
                        $shippingAddress = $address;
                        if($shippingAddress->update($shipData)) {
                            session()->flash('success', 'Profile was successfully Updated!');
                           } else {
                                session()->flash('error', 'There was a problem updating your profile.  Contact IT.');
                        }
                        
                    }
                }
               

             } else {

                $billData = $request->validate([
                    'address1' => 'bail|required|max:255',
                    'address2' => 'bail|required|max:255',
                    'city' => 'bail|required|max:255',
                    'postal' => 'bail|required|max:255',
                    'province_id' => 'bail|required',
                    'country' => 'bail|required|max:255'
                ]);

                $userAddresses = User::find($id)->userAddress;
               foreach($userAddresses as $address){
                    if($address->billingAddress == 1) {
                        $billingAddress = $address;
                        if($billingAddress->update($billData)) {
                            session()->flash('success', 'Profile was successfully Updated!');
                           } else {
                                session()->flash('error', 'There was a problem updating your profile.  Contact IT.');
                        }
                        
                    }
                }

                 
             }
        } else {
            session()->flash('error', 'There was a problem updating your profile.  Contact IT.');
        }

        
         //$data = $request->all();
         return redirect('/profile');

    }

}