<?php
/**
 * Controller for Register
 * @file RegisterController.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-1
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Province;
use App\UserAddress;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'digits:10'],


            'address1' => ['required', 'string', 'max:255'],
            'address2' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'alpha', 'max:255'],
            'postal' => ['required', 'string', 'regex:/^[a-z][0-9][a-z][- ]?[0-9][a-z][0-9]$/i'],
            'province_id' => ['required', 'digits:1'],
            'country' => ['required', 'string', 'alpha', 'max:255'],
        ]);
    } 

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        
        $user = User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'isAdmin' => 0,
            'points' => 0,
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        $data['user_id']=$user->id;

        // Default Billing Address
        UserAddress::create([

            'user_id' => $data['user_id'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'city' => $data['city'],
            'postal' => $data['postal'],
            'province_id' => $data['province_id'],
            'country' => $data['country'],
            'shippingAddress' => 0,
            'billingAddress' => 1,
        ]);

        // Default Shipping Address
        UserAddress::create([

            'user_id' => $data['user_id'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'city' => $data['city'],
            'postal' => $data['postal'],
            'province_id' => $data['province_id'],
            'country' => $data['country'],
            'shippingAddress' => 1,
            'billingAddress' => 0,
        ]);

        session()->flash('success', 'User account successfully created!.');

        return $user;
    }

    public function showRegistrationForm()
    {
        $provinces = Province::pluck('name','id');
        return view('auth.register', compact('provinces'));
    }

}
