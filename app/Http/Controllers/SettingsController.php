<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Settings;
use App\Models\SettingsSub;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function submit(Request $request)
    {
        $validation = $request->validate([
            'name'       => 'required|min:1|max:255',
            'status'     => 'required',
            'sort_field' => 'required',
        ]);
        $settings             = new Settings();
        $settings->name       = $request->input('name');
        $settings->status     = $request->input('status');
        $settings->sort_field = $request->input('sort_field');
        $settings->save();

        return redirect()->route('admin_settings_add')->with('success', __ ('admin.Messages.success_added'));
    }

    public function getAllData()
    {
        $settings    = new Settings;
        $settingsSub = new SettingsSub;
        $dataSub = DB::table('settings_subs')->join('settings', 'category_id', '=', 'settings.id')->select('settings_subs.*', 'settings.name AS category_name')->get();
        return view('admin.settings.admin_settings', ['data' => $settings->orderBy('sort_field')->get(), 'dataSub' => $dataSub]);
    }

    public function getData($id)
    {
        $settings = new Settings;
        return view('admin.settings.admin_settings_edit', ['data' => $settings->find($id)]);
    }

    public function updateData(Request $request, $id)
    {
        $validation = $request->validate([
            'name'       => 'required|min:1|max:255',
            'status'     => 'required',
            'sort_field' => 'required',
        ]);
        $settings             = Settings::find($id);
        $settings->name       = $request->input('name');
        $settings->status     = $request->input('status');
        $settings->sort_field = $request->input('sort_field');
        $settings->save();

        return redirect()->route('admin_settings_edit', $id)->with('success', __ ('admin.Messages.success_update'));
    }
}
