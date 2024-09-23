<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScienceDataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [ScienceDataController::class, 'index'])->name('index');
Route::get('/sciencedatas', [ScienceDataController::class, 'show'])->name('science_datas.list');
Route::get('/sciencedatas/detail/{id}', [ScienceDataController::class, 'detail'])->name('science_datas.detail');
Route::get('/hyouhon/{id}', [ScienceDataController::class, 'hyouhon'])->name('hyouhon');
Route::get('/hyouhon.php', [ScienceDataController::class, 'old_hyouhon'])->name('old_hyouhon');
Route::get('/map', function(){return view('map');})->name('map');
Route::get('/riyoukitei', function(){return view('riyoukitei');})->name('riyoukitei');
Route::get('/help', function(){return view('help');})->name('help');
Route::get('/catalogue', function(){return view('catalogue');})->name('catalogue');

Route::get('/login/google', [LoginController::class, 'redirectToGoogle']);
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);
// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/login/google/home', [HomeController::class, 'index'])->name('home');
// Route::get('/login/google/sciencedatas', [ScienceDataController::class, 'show'])->name('science_datas.list');

Route::get('/home', function () {
    $user = Auth::user(); // ログインしているユーザー情報を取得
    if (!$user) {
        return redirect('/'); // ログインしていない場合はトップページへリダイレクト
    }
    return view('home', ['user' => $user]);
})->name('home');

Route::get('/logout', function () {
    Auth::logout(); // ユーザーをログアウト
    return redirect('/'); // ログアウト後にリダイレクトするページ
})->name('logout');
