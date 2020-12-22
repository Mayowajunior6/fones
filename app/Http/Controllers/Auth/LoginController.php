<?php
/**
 * Controller for Login
 * @file LoginController.php
 * @author  Mayowa Ajamu <ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at 2020-12-1
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {  
        $inputVal = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
            if (auth()->user()->isAdmin == 1) {
                return redirect()->route('admin.dash')->with('success','You have successfully logged in as admin!.');
            }else{
                return redirect()->route('home')->with('success','You have successfully logged in!.');
            }
        }else{
            return redirect()->route('login')->with('error','Email & Password are incorrect.');
        }     
    }

     protected function loggedOut(Request $request)
    {
        $request->session()->flash('info', 'You have successfully logged out!.');
    }
}
