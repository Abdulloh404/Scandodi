<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Google\Api\AuthProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;



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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToLine()
    {
        return Socialite::driver('line')->redirect();
    }
    public function handleLineCallback()
    {
        try {
            $user = Socialite::driver('line')->user();
            $finduser = AuthProvider::where('provider', 'line')->where('provider_id', $user->id)->first();
            if ($finduser) {
                $user = User::where('id', $finduser->user_id)->first();
                Auth::login($user);
                return redirect('/');
            } else {
                $newUser = new User();
                $newUser->name = $user->name ? $user->name : $user->nickname;
                $newUser->email = $user->email;
                $newUser->save();
                $newUser->assignRole('Member');

                $new_user = new AuthProvider();
                $new_user->user_id = $newUser->id;
                $new_user->provider = 'line';
                $new_user->provider_id = $user->id;
                $new_user->save();
                Auth::login($newUser);
                return redirect('/');
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect('/');
        }
    }
}
