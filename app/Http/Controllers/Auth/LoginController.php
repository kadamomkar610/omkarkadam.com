<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    /******************************************************
     * Redirect the user to the google authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($service)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return Response
     */
    public function handleProviderCallback($service)
    { 
        
        $user = Socialite::driver($service)->user();

        $findUser= User::where('email',$user->getEmail())->first();
    
        
        if($findUser)
        {
            Auth::login($findUser);
        }
        else
        { 
            $NewUser = new User;
            $NewUser->name = $user->getName();
            $NewUser->email = $user->getEmail();
            $NewUser->password = bcrypt(123456);
            $NewUser->save();
            Auth::login($NewUser);
        } 
         // dd(333);   
        return redirect('home'); 
    }




}
