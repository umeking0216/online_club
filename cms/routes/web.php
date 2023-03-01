<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunityController; //追加
use App\Models\Community; //追加

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//本：ダッシュボード表示(books.blade.php)
Route::get('/', [CommunityController::class,'index'])->middleware(['auth'])->name('community_index');
Route::get('/dashboard', [CommunityController::class,'index'])->middleware(['auth'])->name('dashboard');

//本：追加 
Route::post('/communities',[CommunityController::class,"store"])->name('community_store');

//本：削除 
Route::delete('/community/{community}', [CommunityController::class,"destroy"])->name('communite_destroy');

//本：更新画面
Route::post('/communitiesedit/{community}',[CommunityController::class,"edit"])->name('community_edit'); //通常
Route::get('/communitiesedit/{community}', [CommunityController::class,"edit"])->name('edit');      //Validationエラーありの場合

//本：更新画面
Route::post('/communities/update',[CommunityController::class,"update"])->name('community_update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
