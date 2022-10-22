<?php
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Portfolio
Route::get('/', function () { return view('portfolio.portfolio_main');  })->name('portfolio');
Route::get('/web', 'App\Http\Controllers\PortfolioController@getWebData')->name('portfolio_web');
Route::get('/web/view/{id}', 'App\Http\Controllers\PortfolioController@getWebItemData')->name('portfolio_web_view');
Route::get('/animation', 'App\Http\Controllers\PortfolioController@getAnimationData')->name('portfolio_animation');
Route::get('/applications', 'App\Http\Controllers\PortfolioController@getApplicationsData')->name('portfolio_app');
Route::get('/applications/view/{id}', 'App\Http\Controllers\PortfolioController@getApplicationsItemData')->name('portfolio_app_view');
Route::get('/old', function () { return view('portfolio.portfolio_old');})->name('portfolio_old');
//Portfolio


//Registration
Route::get('/registration', function () {return view('auth.registration');})->name('registration');
Route::post('/registration/submit', 'App\Http\Controllers\RegistrationController@submit')->name('registration-form');
//Registration


//Localization
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
Auth::routes();
//Localization


// Admin Panel
Route::get('/admin', function () {return view('admin.admin_main');})->name('admin');
Route::get('/admin/portfolio/', 'App\Http\Controllers\PortfolioController@getAllData')->name('admin_portfolio');
Route::get('/admin/portfolio/add', 'App\Http\Controllers\PortfolioController@getCategories')->name('admin_portfolio_add');
Route::post('/admin/portfolio/add/submit', 'App\Http\Controllers\PortfolioController@submit')->name('portfolio_submit');
Route::get('/admin/portfolio/edit/{id}', 'App\Http\Controllers\PortfolioController@getData')->name('admin_portfolio_edit');
Route::post('/admin/portfolio/edit/{id}', 'App\Http\Controllers\PortfolioController@updateData')->name('admin_portfolio_edit_submit');
Route::get('/admin/portfolio/delete/{id}', 'App\Http\Controllers\PortfolioController@deleteData')->name('admin_portfolio_delete_submit');

Route::get('/admin/settings', 'App\Http\Controllers\SettingsController@getAllData')->name('admin_settings');
Route::get('/admin/settings/category/add/', function () {return view('admin.settings.admin_settings_add');})->name('admin_settings_add');
Route::post('/admin/settings/category/add/submit', 'App\Http\Controllers\SettingsController@submit')->name('admin_settings_submit');
Route::get('/admin/settings/category/edit/{id}', 'App\Http\Controllers\SettingsController@getData')->name('admin_settings_edit');
Route::post('/admin/settings/category/edit/{id}', 'App\Http\Controllers\SettingsController@updateData')->name('admin_settings_edit_update');

Route::get('/admin/settings/subcategory/add/', 'App\Http\Controllers\SettingsSubController@getAllCategories')->name('admin_settings_subcategory_add');
Route::post('/admin/settings/subcategory/add/submit', 'App\Http\Controllers\SettingsSubController@submit')->name('admin_settings_subcategory_add_submit');
Route::get('/admin/settings/subcategory/edit/{id}', 'App\Http\Controllers\SettingsSubController@getData')->name('admin_settings_subcategory_edit');
Route::post('/admin/settings/subcategory/edit/{id}', 'App\Http\Controllers\SettingsSubController@updateData')->name('admin_settings_subcategory_edit_submit');

Route::get('/admin/finance/', 'App\Http\Controllers\FinancesController@getAllData')->name('admin_finance');
Route::get('/admin/finance/add', 'App\Http\Controllers\FinancesController@getCategories')->name('admin_finance_add');
Route::post('/admin/finance/add/submit', 'App\Http\Controllers\FinancesController@submit')->name('finance_submit');
Route::get('/admin/finance/edit/{id}', 'App\Http\Controllers\FinancesController@getData')->name('admin_finance_edit');
Route::post('/admin/finance/edit/{id}', 'App\Http\Controllers\FinancesController@updateData')->name('admin_finance_edit_submit');
Route::get('/admin/finance/delete/{id}', 'App\Http\Controllers\FinancesController@deleteData')->name('admin_finance_delete_submit');

Route::get('/admin/books/', 'App\Http\Controllers\BooksController@getAllData')->name('admin_books');
Route::get('/admin/books/add', 'App\Http\Controllers\BooksController@getCategories')->name('admin_books_add');
Route::post('/admin/books/add/submit', 'App\Http\Controllers\BooksController@submit')->name('books_submit');
Route::get('/admin/books/edit/{id}', 'App\Http\Controllers\BooksController@getData')->name('admin_books_edit');
Route::post('/admin/books/edit/{id}', 'App\Http\Controllers\BooksController@updateData')->name('admin_books_edit_submit');
Route::get('/admin/books/delete/{id}', 'App\Http\Controllers\BooksController@deleteData')->name('admin_books_delete_submit');
// Admin Panel
