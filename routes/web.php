<?php

    use App\Http\Controllers\Sample01Controller;
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
    return view('welcome');
});

// Route::HTTPリクエストメソッド名('URL', [コントローラ名::class, 'アクション名']);
// HTTPリクエストメソッド名 => get、post、PUT / PATCH、DELETE
// URL => ユーザーからリクエストされるURL
// コントローラ名 => 利用するコントローラー
// アクション名 => 利用するコントローラーないのメソッド名
// use App\Http\Controllers\Sample01Controller; を記載しない場合は　[App\Http\Controllers\Sample01Controller::class,'アクション名']で指定する
Route::get('/sample01', [Sample01Controller::class, 'index'])->name('sample01');

Route::post('/sample01/post', [Sample01Controller::class, 'post'])->name('sample01.post');
