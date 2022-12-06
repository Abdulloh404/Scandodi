<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function LoginWithGoogle()
    {
        $user = Socialite::driver('google')->redirect();
    }

    public function callbackFromGoogle()
    {
        try {

            $user = Socialite::driver('google')->user();


            /**
             * Check User Email If Already There
             */

            $is_user = User::where('email', $user->getEmail())->first();
            if ($is_user) {
                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId(),
                ], [
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId())
                ]);
            } else {
                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId(),

                ]);
            }


            Auth::loginUsingId($saveUser->id);

            return redirect()->route('home');

            // dd($user);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
