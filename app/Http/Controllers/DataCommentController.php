<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataComment_table;

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

        $isInsertSuccress = DataComment_table::insert([ 'name'=>$name,
                                                        'Email'=>$email,
                                                        'Company'=>$company,
                                                        'Tell'=>$phone,
                                                        'Businnesstype'=>$business,
                                                        'Comment'=> $comment
        ]);
        if($isInsertSuccress)
<<<<<<< HEAD
        // return redirect('my-notification/success');
        return back();

        // echo '<script language="javascript">';
=======
        return redirect('my-notification/success');
        return redirect()->back();
                // echo '<script language="javascript">';
>>>>>>> parent of 716d179 (Notify)
        // echo 'alert("Contact successfully sent")';
        // echo '</script>';
    }



}
