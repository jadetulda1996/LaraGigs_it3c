<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $listings = Listing::all();

    return view('listings', compact(['listings']));
});

Route::get('/listings/{id}', function($id){
    $listing = Listing::find($id);

    if(!$listing)
        abort('404');

    return view('listing', compact('listing'));
});
