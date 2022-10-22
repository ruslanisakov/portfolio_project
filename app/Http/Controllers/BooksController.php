<?php

namespace App\Http\Controllers;
use App\Models\Books;
use App\Models\Finances;
use App\Models\SettingsSub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function submit(Request $request){
        $validation = $request->validate([
            'name'        => 'required',
            'author'      => 'required',
            'category_id' => 'required|integer',
            'read_date'   => 'required|date',
        ]);
        $books                = new Books();
        $books->name          = $request->input('name');
        $books->author        = $request->input('author');
        $books->category_id   = $request->input('category_id');
        $books->read_date     = $request->input('read_date');
        $books->save();

        return redirect()->route('admin_books_add')->with('success', __ ('admin.Messages.success_added'));
    }

    public function getAllData(Request $request){
        $request->input('date_start')  ? $date_start  = $request->input('date_start')  : $date_start  = date('Y-m-d', strtotime(date('Y-m-d') . "-1 day"));
        $request->input('date_end')    ? $date_end    = $request->input('date_end')    : $date_end    = date('Y-m-d');
        $request->input('category_id') ? $category_id = $request->input('category_id') : $category_id = -1;

        if($category_id > 0)
            $finance = DB::table('books')
                ->join('settings_subs', 'books.category_id', '=', 'settings_subs.id')
                ->select('books.*', 'settings_subs.name AS category_name')
                ->where('read_date', '>=', $date_start)
                ->where('read_date', '<=', $date_end)
                ->where('books.category_id', '=', $category_id)
                ->get();
        else
            $finance = DB::table('books')
                ->join('settings_subs', 'books.category_id', '=', 'settings_subs.id')
                ->select('books.*', 'settings_subs.name AS category_name')
                ->where('read_date', '>=', $date_start)
                ->where('read_date', '<=', $date_end)
                ->get();
        $settingsSub = new SettingsSub;

        return view(
            'admin.books.admin_books',
            [
                'data'         => $finance,
                'categories'   => $settingsSub->where('status', '=', 1)->where('category_id', '=', 4)->orderBy('sort_field')->get(),
                'category_id'  => $category_id,
                'date_start'   => $date_start,
                'date_end'     => $date_end,
            ]
        );
    }

    public function updateData(Request $request, $id){
        $validation = $request->validate([
            'name'        => 'required',
            'author'      => 'required',
            'category_id' => 'required|integer',
            'read_date'   => 'required|date',
        ]);
        $books                = Books::find($id);
        $books->name          = $request->input('name');
        $books->author        = $request->input('author');
        $books->category_id   = $request->input('category_id');
        $books->read_date     = $request->input('read_date');
        $books->save();

        return redirect()->route('admin_books_edit', $id)->with('success', __ ('admin.Messages.success_update'));
    }

    public function getCategories(){
        $settingsSub = new SettingsSub;
        return view('admin.books.admin_books_add', ['data' => $settingsSub->where('status', '=', 1)->where('category_id', '=', 4)->orderBy('sort_field')->get()]);
    }

    public function getData($id)
    {
        $books       = new Books;
        $books       = $books->find($id);
        $settingsSub = new SettingsSub;
        return view('admin.books.admin_books_edit', ['data' => $books, 'dataSub' => $settingsSub->where('status', '=', 1)->where('category_id', '=', 4)->orderBy('sort_field')->get()]);
    }

    public function deleteData($id){
        $books = Books::find($id);
        $books->delete();
        return redirect()->route('admin_books')->with('success', __ ('admin.Messages.success_delete'));
    }

}
