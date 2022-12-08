<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;
use Exception;

class FacebookController extends Controller
{
    /**
     * Redirection to facebook login
     *
     * @return void
     */
    public function LoginUsingFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Handle API from and Login access
     *
     * @return void
     */
    public function callbackFromFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $finduser = User::where('facebook_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/email/verify');
            }else{

                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'facebook_id'=> $user->id,
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
