<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data['tables'] = Table::where('user_id', $user->id)->get();
        return view('table.index', $data);
    }

    public function create()
    {
        $data['restaurants'] = auth()->user()->active_restaurants;

        $data['extend_message'] = '';
        $user = auth()->user();
        if ($user->type != 'admin') {
            $userPlan = isset($user->current_plans[0]) ? $user->current_plans[0] : '';
            if ($userPlan) {
                $userTables = $user->tables()->count();
                if ((!$userPlan || $userTables >= $userPlan->table_limit) && $userPlan->table_unlimited != 'yes') {
                    $data['extend_message'] = trans('layout.table_extends');
                }
            } else {
                return redirect()->route('plan.list')->withErrors(['failed' => trans('layout.message.plan_update_first')]);
            }
        }


        return view('table.create', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'restaurant_id' => 'required',
            'name' => 'required|max:191',
            'no_of_capacity' => 'required|numeric|gt:-1|lt:9999',
            'position' => 'required|max:191',
        ]);

        $user = auth()->user();
        if ($user->type != 'admin') {
            $userPlan = isset($user->current_plans[0]) ? $user->current_plans[0] : '';
            $userTables = $user->tables()->count();
            if( (!$userPlan || $userTables >= $userPlan->table_limit) && $userPlan->table_unlimited!='yes'){
                return redirect()->back()->withErrors(['msg' => trans('layout.table_extends')]);
            }
        }
        $user->tables()->create($request->all());

        return redirect()->route('table.index')->with('success',trans('layout.message.table_success_msg'));


    }

    public function edit(Table $table)
    {
        $data['table'] = $table;
        $data['restaurants'] = auth()->user()->active_restaurants;
        return view('table.edit', $data);
    }

    public function update(Request $request, Table $table)
    {
        $request->validate([
            'restaurant_id' => 'required',
            'name' => 'required|max:191',
            'no_of_capacity' => 'required|numeric|gt:-1',
            'position' => 'required|max:191',
        ]);
        $request['user_id'] = auth()->user()->id;
        $table->update($request->all());

        return redirect()->route('table.index')->with('success',trans('layout.message.table_success_msg'));
    }

    public function destroy(Table $table)
    {

        $order = Order::where('table_id', $table->id)->first();
        if ($order) return redirect()->back()->withErrors(['msg' => trans('layout.message.table_not_delete')]);


        $table->delete();
        return redirect()->back()->with('success', trans('layout.message.table_delete_msg'));
    }
}
