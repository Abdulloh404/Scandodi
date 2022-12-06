<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use App\Models\Newsleter_table;
use Illuminate\Support\Facades\DB;

class NewsleterController extends Controller
{
    public function NewsleterIndex()
    {
        $users = DB::select('select * from newsleter');
        return view('newsleter.index' ,['data'=>$users]);
    }

    public function NewsleterInsert(Request $request)
    {
        $email = $request->input('email');

        $isInsertSuccress = Newsleter_table::insert(['email'=>$email]);

        if($isInsertSuccress) echo '<h1>You has subscibes already</h1>';
        else echo 'Procees not working';
    }
}
