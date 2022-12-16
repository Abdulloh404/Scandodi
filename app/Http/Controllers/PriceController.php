<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\SendMail;
use App\Models\CallWaiter;
use App\Models\CustomMenu;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Plan;
use App\Models\Restaurant;
class PriceController extends Controller
{
    function showprice(){
        $data['plans'] = Plan::where(['status' => 'active'])->where('id', '!=', 1)->get();
        $modules = modules_status('MultiRestaurant');
        if ($modules){
            return redirect()->route('multirestaurant::index');
        }else{
            return view('price.index', $data);
        }
    }

}
