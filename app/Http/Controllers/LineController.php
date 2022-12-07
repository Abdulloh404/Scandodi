<?php

namespace App\Http\Controllers;
use Exception;
use App\Models\User;
use Google\Api\AuthProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\AuthServiceProvider;
use App\Providers\RouteServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;


class LineController extends Controller
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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/email/verify';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function redirectToLine()
    {
        return Socialite::driver('line')->redirect();
    }
    public function handleLineCallback()
    {
        try {
            $user = Socialite::driver('line')->user();
            $finduser = User::where('line_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/email/verify');
            }else{

                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'line_id'=> $user->id,
                        'password' => $user->password
                    ]);
                Auth::login($newUser);
                return redirect()->intended('/email/verify');

            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
