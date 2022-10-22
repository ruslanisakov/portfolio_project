<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests\PortfolioRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\SettingsSub;

class PortfolioController extends Controller
{
    public function submit(Request $request){
        $validation = $request->validate([
            'name'        => 'required',
            'title_image' => '',
            'category_id' => 'required',
            'images'      => 'nullable|required_without:link',
            'link'        => 'nullable|required_without:images',
            'sort_field'  => 'required',
            'description' => 'required',
        ]);
        $portfolio       = new Portfolio();
        $files_names     = array();
        $time            = time();

        if($request->file('images')){
             foreach ($request->file('images') as $key=>$value){
                 $files_names[] = $time.'_'.$key.'.'.$value->getClientOriginalExtension();
                 $value->move(public_path('images/portfolio/works'), $time.'_'.$key.'.'.$value->getClientOriginalExtension());
             }
        }

        $request->file('images') ? $portfolio->images = implode(';', $files_names) : $portfolio->link = $request->input('link');

        if($request->file('title_image')){
            $title_image                          = $request->file('title_image');
            $title_image_new                      = $time.'_title'.'.'.$title_image->getClientOriginalExtension();
            $title_image->move(public_path('images/portfolio/works'), $title_image_new);
            $portfolio->title_image               = $title_image_new;
        }
        $portfolio->name                      = $request->input('name');
        $portfolio->category_id               = $request->input('category_id');
        $portfolio->description               = $request->input('description');
        $portfolio->sort_field                = $request->input('sort_field');
        $portfolio->save();

        return redirect()->route('admin_portfolio_add')->with('success', __ ('admin.Messages.success_added'));
    }
    public function getAllData(){
        $portfolio = DB::table('portfolio')->join('settings_subs', 'portfolio.category_id', '=', 'settings_subs.id')->select('portfolio.*', 'settings_subs.name AS category_name')->orderBy('sort_field')->get();
        return view('admin.portfolio.admin_portfolio', ['data' => $portfolio]);
    }
    public function getData($id)
    {
        $portfolio        = new Portfolio;
        $portfolio        = $portfolio->find($id);
        $portfolio_images = $portfolio->images;
        $portfolio_images = explode(',', $portfolio_images);
        $settingsSub      = new SettingsSub;

        return view('admin.portfolio.admin_portfolio_edit', ['data' => $portfolio, 'images' => $portfolio_images, 'dataSub' => $settingsSub->where('status', '=', 1)->where('category_id', '=', 2)->orderBy('sort_field')->get()]);
    }
    public function getCategories(){
        $settingsSub = new SettingsSub;
        return view('admin.portfolio.admin_portfolio_add', ['data' => $settingsSub->where('status', '=', 1)->where('category_id', '=', 2)->orderBy('sort_field')->get()]);
    }
    public function updateData(Request $request, $id){
        $validation = $request->validate([
            'name'        => 'required',
            'category_id' => 'required',
            'images'      => 'nullable',
            'link'        => 'nullable',
            'sort_field'  => 'required',
            'description' => 'required',
        ]);
        $portfolio   = Portfolio::find($id);
        $files_names = array();
        $time        = time();
        foreach ($request->file() as $file){
            foreach ($file as $key=>$value){
                $files_names[] = $time.'_'.$key.'.'.$value->getClientOriginalExtension();
                $value->move(public_path('images/portfolio/works'), $time.'_'.$key.'.'.$value->getClientOriginalExtension());
            }
        }
        $request->file() ? $portfolio->images = implode(';', $files_names) : $portfolio->link = $request->input('link');
        $portfolio->name                      = $request->input('name');
        $portfolio->category_id               = $request->input('category_id');
        $portfolio->description               = $request->input('description');
        $portfolio->sort_field                = $request->input('sort_field');
        $portfolio->save();

        return redirect()->route('admin_portfolio_edit', $id)->with('success', __ ('admin.Messages.success_update'));
    }
    public function deleteData($id){
        $portfolio = Portfolio::find($id);
        $images = explode(';', $portfolio->images);
        unlink(public_path('images/portfolio/works/'.$portfolio->title_image));
        foreach ($images as $file){
            unlink(public_path('images/portfolio/works/'.$file));
        }
        $portfolio->delete();
        return redirect()->route('admin_portfolio')->with('success', __ ('admin.Messages.success_delete'));
    }
    public function getWebData(){
        $portfolio = DB::table('portfolio')->where('category_id', '=', 1)->where('status', '=', 1)->orderBy('sort_field', 'desc')->get();
        return view('portfolio.portfolio_web', ['data' => $portfolio]);
    }
    public function getAnimationData(){
        $portfolio = DB::table('portfolio')->where('category_id', '=', 3)->where('status', '=', 1)->orderBy('sort_field')->get();
        return view('portfolio.portfolio_animation', ['data' => $portfolio]);
    }
    public function getApplicationsData(){
        $portfolio = DB::table('portfolio')->where('category_id', '=', 2)->where('status', '=', 1)->orderBy('sort_field')->get();
        return view('portfolio.portfolio_applications', ['data' => $portfolio]);
    }
    public function getApplicationsItemData($id){
        $portfolio = new Portfolio;
        $portfolio = $portfolio->find($id);
        $images    = explode(';', $portfolio->images);
        return view('portfolio.portfolio_app_view', ['data' => $portfolio, 'images' => $images]);
    }
    public function getWebItemData($id){
        $portfolio = new Portfolio;
        $portfolio = $portfolio->find($id);
        $images    = explode(';', $portfolio->images);
        return view('portfolio.portfolio_web_view', ['data' => $portfolio, 'images' => $images]);
    }
}
