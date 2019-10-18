<?php

//1.設定 Route 回傳字串
//Route::get('/',function(){
    //return'welcome';
//});

//2. 設定 Route 回傳 view
Route::get('/',function(){
    return view('welcome');
});

