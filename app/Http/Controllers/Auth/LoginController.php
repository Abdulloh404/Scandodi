<?php

namespace App\Http\Controllers\Auth;

use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function logout()
    {
        cache()->flush();
        $authUser = auth()->user();

        auth()->logout();
        Alert::success('You logout already','Comeback as you please');
        return redirect()->route('login');
    }
}
