<?php

namespace App\Http\Controllers;
use App\Models\Settings;
use App\Models\SettingsSub;
use Illuminate\Http\Request;

class SettingsSubController extends Controller
{
    public function submit(Request $request)
    {
        $validation = $request->validate([
            'name'       => 'required|min:1|max:255',
            'category'   => 'required',
            'status'     => 'required',
            'sort_field' => 'required',
        ]);
        $settingsSub              = new SettingsSub();
        $settingsSub->name        = $request->input('name');
        $settingsSub->category_id = $request->input('category');
        $settingsSub->status      = $request->input('status');
        $settingsSub->sort_field  = $request->input('sort_field');
        $settingsSub->save();

        return redirect()->route('admin_settings_subcategory_add')->with('success', __ ('admin.Messages.success_added'));
    }

    public function getAllCategories(){
        $settings = new Settings;
        return view('admin.settings.admin_settings_subcategory_add', ['data' => $settings->where('status', '=', 1)->orderBy('sort_field')->get()]);
    }

    public function getData($id)
    {
        $settings    = new Settings;
        $settingsSub = new SettingsSub;
        return view('admin.settings.admin_settings_subcategory_edit', ['data' => $settings->orderBy('sort_field')->get(), 'dataSub' => $settingsSub->find($id)]);
    }

    public function updateData(Request $request, $id)
    {
        $validation = $request->validate([
            'name'       => 'required|min:1|max:255',
            'category'   => 'required',
            'status'     => 'required',
            'sort_field' => 'required',
        ]);
        $settingsSub              = SettingsSub::find($id);
        $settingsSub->name        = $request->input('name');
        $settingsSub->category_id = $request->input('category');
        $settingsSub->status      = $request->input('status');
        $settingsSub->sort_field  = $request->input('sort_field');
        $settingsSub->save();

        return redirect()->route('admin_settings_subcategory_edit', $id)->with('success', __ ('admin.Messages.success_update'));
    }
}
