<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function AlertIndex()
    {
        echo '<script language="javascript">';
        echo 'alert("message successfully sent")';
        echo '</script>';

        redirect ('/');
    }
}
