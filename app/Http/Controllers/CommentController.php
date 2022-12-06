<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommentController extends Controller
{
    function showcomment(){
        $users = DB::select('select * from datacomment');
        return view('comment.index' ,['data'=>$users]);
        



    }
}
