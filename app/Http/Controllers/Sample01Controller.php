<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample01Controller extends Controller
{
    // % php artisan make:controller Sample01Controller
    public function index(){
        return view('sample01.index');
    }
    public function post(Request $request){
        $request->validate([
            'data01' => 'required',
            'data02' => 'required | max:5',
            'data03' => 'required | min:5',
        ]);
        /*
         * 日本語かファイル
         * https://drive.google.com/file/d/1MtwXYT0C56H5XtHavKiPFSrM_czi-yY_/view?usp=drive_link
         * 解凍したzipファイル内にあるresourcesフォルダをコピー＆ペーストし、laravel-basicフォルダ内のファイルを上書きしましょう。
         * ただしWindowsの場合はVisual Studio Code上ではなく、Windowsのエクスプローラー上でおこなってください。
         * Macの場合はFinderではうまく上書きできないため、ターミナル画面で以下のコマンドでファイルを上書きしてください。
         * cp -Rf ~/Downloads/日本語化ファイル/* /Applications/MAMP/htdocs/laravel-basic/
        */
        return view('sample01.post');
    }
}
