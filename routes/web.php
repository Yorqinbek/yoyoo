<?php

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

Route::get('/', function () {
    return view('welcome');
});

//admin
Route::get('/admin/addshart', [\App\Http\Controllers\ShartController::class, 'create'])->name('addshart');
Route::post('/admin/addshart', [\App\Http\Controllers\ShartController::class, 'store'])->name('saveshart');
Route::get('admin/', [\App\Http\Controllers\HomeController::class, 'admin'])->middleware('admin');


//users
Route::get('/home', function () {
    $sharts = \App\Models\Shart::all();
    $bajarilgan_shart_idlari = array();
    foreach ($sharts as $shart) {
        $explode_id = array_map('intval', explode(',', $shart->user_submit));
        $id_user_check = array_search(\Illuminate\Support\Facades\Auth::id(), $explode_id, true);
        if ($id_user_check > -1) {
            array_push($bajarilgan_shart_idlari, $shart->id);
        }
    }
    return view('home', compact('sharts', 'bajarilgan_shart_idlari'));})->middleware('auth');
Route::get('/home/shart/{id}', function ($id) {
    $shart = \App\Models\Shart::findOrFail($id);
    return view('users.shartview',compact('shart'));
});
