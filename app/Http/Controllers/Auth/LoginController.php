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
        toast('You has Logout already!','success');
        return redirect()->route('login');
    }
}
