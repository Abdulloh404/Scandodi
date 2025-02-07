<?php

namespace App\Http\Controllers;

use App\Models\CallWaiter;
use App\Models\EmailTemplate;
use App\Models\Item;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\UserPlan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user=auth()->user();
        if(!$user) abort(404);

        if($user->type=='customer')
        {
            return redirect()->route('order.index');
        }

        if($user->type=='admin'){
            $data['countTotalIncome']=UserPlan::where('status','approved')->sum('cost');
            $data['countRestaurant']=Restaurant::all('id')->count();
            $data['countPendingOrder']=Order::where('status','pending')->count();
            $data['pendingOrders']=Order::where('status','pending')->orderBy('created_at','desc')->limit(10)->get();
            $data['countItem']=Item::all()->count();
        }else{
            $data['countRestaurant']=$user->restaurants()->count();

            $restaurantIds=$user->restaurants()->pluck('id');
            $data['countTotalIncome']=Order::whereIn('restaurant_id',$restaurantIds)->where('payment_status','paid')->sum('total_price');
            $data['countPendingOrder']=Order::whereIn('restaurant_id',$restaurantIds)->where('status','pending')->count();
            $data['pendingOrders']=Order::whereIn('restaurant_id',$restaurantIds)->where('status','pending')->orderBy('created_at','desc')->limit(10)->get();
            $data['countItem']=$user->items()->count();

            $restIds = $user->restaurants()->pluck('id');
            $data['call_waiters'] = CallWaiter::whereIn('restaurant_id',$restIds)->orderBy('created_at', 'desc')->get();
        }

        $data['countPendingPlan']=UserPlan::where('status','pending')->count();
        $data['PendingPlans']=UserPlan::where('status','pending')->orderBy('created_at','desc')->limit(10)->get();


        $availableSettings=[];
        $pgs=json_decode(get_settings('payment_gateway'));
        if(isset($pgs) && !$pgs->paypal_client_id){ $availableSettings[]=trans("layout.need_to_configure_paypal_api");};
        if(isset($pgs) && !$pgs->stripe_publish_key){ $availableSettings[]=trans("layout.need_to_configure_stripe_api");};

        $ss=json_decode(get_settings('site_setting'));
        if(isset($ss) && !$ss->favicon){ $availableSettings[]=trans("layout.need_to_upload_favicon");};
        if(isset($ss) && !$ss->logo){ $availableSettings[]=trans("layout.need_to_upload_logo");};

        $es=json_decode(get_settings('email_setting'));
        if(isset($es) && !$es->host){ $availableSettings[]=trans("layout.need_to_configure_email_settings");};

        $et=EmailTemplate::whereIn('type',['registration','forget_password'])->get();
        if($et->count() <=0){ $availableSettings[]=trans("layout.need_to_configure_email_template_settings__at_least_registration_forget_password");};

        $data['available_setting']=$availableSettings;


        $data['userPlan'] = isset($user->current_plans[0])?$user->current_plans[0]:'';
        $data['previous_plan']=$user->user_plans()->where('is_current','yes')->first();
        return view('dashboard.index',$data);
    }
}
