<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScienceDataController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function(){return view('index');})->name('index');
Route::get('/search', [ScienceDataController::class, 'search'])->name('search');
Route::get('/sciencedatas/list', [ScienceDataController::class, 'index'])->name('sciencedatas.index');
Route::get('/sciencedatas/loginlist', [ScienceDataController::class, 'loginlist'])->name('sciencedatas.loginlist');
Route::get('/sciencedatas/editform', function(){return view('sciencedatas.editform');})->name('sciencedatas.editform');
Route::get('/sciencedatas/preedit', [ScienceDataController::class, 'preedit'])->name('sciencedatas.preedit');
Route::get('/sciencedatas/loginshow/{id}', [ScienceDataController::class, 'loginshow'])->name('sciencedatas.loginshow');
Route::resource('sciencedatas',ScienceDataController::class)->except(['index','loginlist', 'loginshow', 'preedit']);

Route::post('/upload', [ImageController::class, 'store']);

Route::get('/hyouhon/{id}', [ScienceDataController::class, 'hyouhon'])->name('hyouhon');
Route::get('/hyouhon.php', [ScienceDataController::class, 'old_hyouhon'])->name('old_hyouhon');
Route::get('/map', function(){return view('map');})->name('map');
Route::get('/riyoukitei', function(){return view('riyoukitei');})->name('riyoukitei');
Route::get('/help', function(){return view('help');})->name('help');
Route::get('/catalogue', function(){return view('catalogue');})->name('catalogue');
Route::get('/type', function(){return view('type');})->name('type');
Route::get('/naturalhistory', function(){return view('naturalhistory');})->name('naturalhistory');
Route::get('/kanagawa_pl', function(){return view('kanagawa_pl');})->name('kanagawa_pl');

Route::get('/login/google', [LoginController::class, 'redirectToGoogle'])->name('google');
Route::get('/login/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('/home', function () {
    $user = Auth::user(); // ログインしているユーザー情報を取得
    if (!$user) {
        return redirect('/'); // ログインしていない場合はトップページへリダイレクト
    }
    return view('home', ['user' => $user]);
})->name('home');

Route::get('/sciencedatas/create', function () {
    $user = Auth::user(); // ログインしているユーザー情報を取得
    if (!$user) {
        return redirect('/'); // ログインしていない場合はトップページへリダイレクト
    }
    return view('sciencedatas.create', ['user' => $user]);
})->name('sciencedatas.create');

Route::get('/logout', function () {
    Auth::logout(); // ユーザーをログアウト
    return redirect('/'); // ログアウト後にリダイレクトするページ
})->name('logout');
