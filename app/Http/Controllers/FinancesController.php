<?php

namespace App\Http\Controllers;

use App\Models\Finances;
use App\Models\Portfolio;
use App\Models\SettingsSub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinancesController extends Controller
{
    public function submit(Request $request){
        $validation = $request->validate([
            'date_purchase' => 'required',
            'category_id'   => 'required',
            'name'          => 'required',
            'count'         => 'required',
            'price'         => 'required',
        ]);
        $finance                = new Finances();
        $finance->date_purchase = $request->input('date_purchase');
        $finance->category_id   = $request->input('category_id');
        $finance->name          = $request->input('name');
        $finance->description   = $request->input('description');
        $finance->price         = $request->input('price');
        $finance->count         = $request->input('count');
        $finance->save();

        return redirect()->route('admin_finance_add')->with('success', __ ('admin.Messages.success_added'));
    }

    public function getAllData(Request $request){
        $request->input('date_start')  ? $date_start  = $request->input('date_start')  : $date_start  = date('Y-m-d', strtotime(date('Y-m-d') . "-1 day"));
        $request->input('date_end')    ? $date_end    = $request->input('date_end')    : $date_end    = date('Y-m-d');
        $request->input('category_id') ? $category_id = $request->input('category_id') : $category_id = -1;

        if($category_id > 0)
            $finance = DB::table('finances')
                ->join('settings_subs', 'finances.category_id', '=', 'settings_subs.id')
                ->select(DB::raw('finances.*, finances.price * finances.count AS total, settings_subs.name AS category_name'))
                ->where('date_purchase', '>=', $date_start)
                ->where('date_purchase', '<=', $date_end)
                ->where('finances.category_id', '=', $category_id)
                ->get();
        else
            $finance = DB::table('finances')
                ->join('settings_subs', 'finances.category_id', '=', 'settings_subs.id')
                ->select(DB::raw('finances.*, finances.price * finances.count AS total, settings_subs.name AS category_name'))
                ->where('date_purchase', '>=', $date_start)
                ->where('date_purchase', '<=', $date_end)
                ->get();
        $settingsSub = new SettingsSub;
        $max_total = $finance->sum('total');

        return view(
            'admin.finance.admin_finance',
            [
                'data'         => $finance,
                'categories'   => $settingsSub->where('status', '=', 1)->where('category_id', '=', 3)->orderBy('sort_field')->get(),
                'category_id'  => $category_id,
                'date_start'   => $date_start,
                'date_end'     => $date_end,
                'max_total'    => $max_total,
            ]
        );
    }

    public function getCategories(){
        $settingsSub = new SettingsSub;
        return view('admin.finance.admin_finance_add', ['data' => $settingsSub->where('status', '=', 1)->where('category_id', '=', 3)->orderBy('sort_field')->get()]);
    }

    public function getData($id)
    {
        $finance      = new Finances;
        $finance      = $finance->find($id);
        $settingsSub  = new SettingsSub;
        return view('admin.finance.admin_finance_edit', ['data' => $finance, 'dataSub' => $settingsSub->where('status', '=', 1)->where('category_id', '=', 3)->orderBy('sort_field')->get()]);
    }

    public function updateData(Request $request, $id){
        $validation = $request->validate([
            'date_purchase' => 'required',
            'category_id'   => 'required',
            'name'          => 'required',
            'count'         => 'required',
            'price'         => 'required',
        ]);
        $finance                = Finances::find($id);
        $finance->date_purchase = $request->input('date_purchase');
        $finance->category_id   = $request->input('category_id');
        $finance->name          = $request->input('name');
        $finance->description   = $request->input('description');
        $finance->price         = $request->input('price');
        $finance->count         = $request->input('count');
        $finance->save();

        return redirect()->route('admin_finance_edit', $id)->with('success', __ ('admin.Messages.success_update'));
    }

    public function deleteData($id){
        $finance = Finances::find($id);
        $finance->delete();
        return redirect()->route('admin_finance')->with('success', __ ('admin.Messages.success_delete'));
    }
}
