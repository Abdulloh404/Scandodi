<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataComment_table;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class DataCommentController extends Controller
{
    public function Showindex()
    {
        return view('comment.index');
    }


    public function DataInsert(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $company = $request->input('company');
        $phone = $request->input('phone');
        $business = $request->input('Business');
        $comment = $request->input('Comment');

        $isInsertSuccress = DataComment_table::insert([
            'name' => $name,
            'Email' => $email,
            'Company' => $company,
            'Tell' => $phone,
            'Businnesstype' => $business,
            'Comment' => $comment
        ]);
        if ($isInsertSuccress)
        Alert::success('STATUS UPDATE', 'Your comment has successfully!');
        return back();
    }
}
