<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\UserPlan;
use Illuminate\Http\Request;
use Stripe\ApiOperations\All;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\VarDumper\VarDumper;

class PlanController extends Controller
{
    public function planList()
    {
        $data['plans'] = Plan::where('status', 'active')->where('id', '!=', 1)->get();
        return view('plans.index', $data);
    }
    public function index()
    {
        $data['plans'] = Plan::where('id', '!=', 1)->get();
        return view('plans.plan_table', $data);
    }
    public function create()
    {
        return view('plans.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:191',
            'cost' => 'required|numeric|gt:-1',
            'recurring_type' => 'required|in:onetime,monthly,weekly,yearly',
            'table_limit' => 'required|numeric|gt:-1',
            'restaurant_limit' => 'required|numeric|gt:-1',
            'item_limit' => 'required|numeric|gt:-1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);


        if ($request->is_item_unlimited == 'yes') {
            unset($request['is_item_unlimited']);
            $request['item_unlimited'] = 'yes';
            $request['item_limit'] = 0;
        } else {
            $request['item_unlimited'] = 'no';
        }

        if ($request->is_table_unlimited == 'yes') {
            unset($request['is_table_unlimited']);
            $request['table_unlimited'] = 'yes';
            $request['table_limit'] = 0;
        } else {
            $request['table_unlimited'] = 'no';
        }

        if ($request->is_restaurant_unlimited == 'yes') {
            unset($request['is_restaurant_unlimited']);
            $request['restaurant_unlimited'] = 'yes';
            $request['restaurant_limit'] = 0;
        } else {
            $request['restaurant_unlimited'] = 'no';
        }

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('/uploads-images'), $filename);
            $request['image'] = $filename;
        }
        Plan::create($request->all());
        DB::table('plans')->where('title', $request->title)->update(
            [
                'image' => $filename,
            ]
        );
        return redirect()->route('plan.index');
        // dd($request);

    }
    public function edit(Plan $plan)
    {
        $data['plan'] = $plan;
        if ($plan->id == 1) return redirect()->route('plan.index')->withErrors(['msg' => trans('layout.message.invalid_request')]);

        return view('plans.edit', $data);
    }
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'title' => 'required|max:191',
            'cost' => 'required|numeric|gt:-1',
            'recurring_type' => 'required|in:onetime,monthly,weekly,yearly',
            'table_limit' => 'required|numeric|gt:-1',
            'restaurant_limit' => 'required|numeric|gt:-1',
            'item_limit' => 'required|numeric|gt:-1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2000',
        ]);
        if ($plan->id == 1) return redirect()->route('plan.index')->withErrors(['msg' => trans('layout.message.invalid_request')]);
        if ($request->is_item_unlimited == 'yes') {
            unset($request['is_item_unlimited']);
            $request['item_unlimited'] = 'yes';
            $request['item_limit'] = 0;
        } else {
            $request['item_unlimited'] = 'no';
        }

        if ($request->is_table_unlimited == 'yes') {
            unset($request['is_table_unlimited']);
            $request['table_unlimited'] = 'yes';
            $request['table_limit'] = 0;
        } else {
            $request['table_unlimited'] = 'no';
        }

        if ($request->is_restaurant_unlimited == 'yes') {
            unset($request['is_restaurant_unlimited']);
            $request['restaurant_unlimited'] = 'yes';
            $request['restaurant_limit'] = 0;
        } else {
            $request['restaurant_unlimited'] = 'no';
        }
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move(public_path('/uploads-images'), $filename);
            $request['image'] = $filename;
        }


        $plan->update($request->all());
        DB::table('plans')->where('title', $request->title)->update(
            [
                'image' => $filename,
            ]
        );

        return redirect()->route('plan.index')->with('success', trans('layout.message.plan_update'));
    }
    public function destroy(Plan $plan)
    {
        if ($plan->id == 1) return redirect()->route('plan.index')->withErrors(['msg' => trans('layout.message.invalid_request')]);

        $user_plan = UserPlan::where('plan_id', $plan->id)->first();
        if ($user_plan) return redirect()->back()->withErrors(['msg' => trans('layout.message.plan_not_delete')]);

        $plan->delete();
        return redirect()->back()->with('success', trans('layout.message.plan_delete_msg'));
    }
}
