<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/travels',function(){
    $items = DB::table('travel_categories')->get();

    return view('travels', ['items' => $items]);
});

Route::get('/tours/{cat_id}',function($cat_id){
    $items = DB::table('tours')->where('category_id', $cat_id)->get();

    $categoryName = DB::table('tours')
    ->join('travel_categories', 'tours.category_id', '=', 'travel_categories.category_id')
    ->where('tours.category_id', $cat_id)
    ->select('tours.*', DB::raw('travel_categories.category_name'))
    ->first();
    
    if ($categoryName) {
        return view('tours', ['items' => $items, 'categoryName' => $categoryName]);
    } else {
        return view('errors.categoryNotFound');
    }
});

Route::get('/tours/about/{tour_id}',function($tour_id){
    $items = DB::table('tours_details')->where('tour_id', $tour_id)->get();

    return view('about', ['items' => $items]);
    
});

Route::get('/outertravels',function(){
    return view('outertravels');
});


Route::get('/about',function(){
    return view('about');
});


Route::get('/contact',function(){
    return view('contact');
});


