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
    protected $redirectTo = '/email/verify';

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
        try{
            $user = Socialite::driver('line')->user();
            $finduser = AuthProvider::where('provider', 'line')->where('provider_id', $user->id)->first();
            if ($finduser) {
                $user = User::where('id', $finduser->user_id)->first();
                Auth::login($user);
                return redirect('/email/verify');
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
                return redirect('/email/verify');
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            echo '<script language="javascript">';
            echo 'alert("You login has not working")';
            echo '</script>';
            // return redirect('/login');

        }
    }
}
