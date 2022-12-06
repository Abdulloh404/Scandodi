<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;

class FacebookController extends Controller
{
    /**
     * Login Using Facebook
     */

    public function LoginUsingFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFromFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();


            $saveUser = User::updateOrCreate([
                'facebook_id' => $user->getId(),
            ], [
                'name' => $user->getName(),
                'email' => $user->getEmail()
                // 'password' => Hash::make($user->getName() . '@' . $user->getId())

            ]);
            Auth::loginUsingId($saveUser->id);
            return redirect()->route('index');
            // dd($user);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
