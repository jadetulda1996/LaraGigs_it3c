<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use App\Models\Phone;
use App\Models\User;
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

//index
Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::post('/listings', [ListingController::class, 'store']);

Route::put('/listings/{listing}', [ListingController::class, 'update']);

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

Route::get('/phones/{user}/listings', function (User $user) {
    // $phones = Phone::with('user')->get();
    // $users = User::with('phone')->get();

    $users = Listing::with('user')->get();
    // $listings = $user->with('listings')->withCount('listings')->get();


    return response()->json($users);
});