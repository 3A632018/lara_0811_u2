<?php

//1-1.設定 Route 回傳字串
//Route::get('/',function(){
    //return'welcome';
//});

//2. 設定 Route 回傳 view
Route::get('/',function(){
    return view('welcome');
});

//3. 設定 Route 跳轉頁面
//Route::get('/',function(){
    //return redirect('welcome');
//);


//2-1. 修改 Route 接受參數
//Route::get('hello/{name}',function($name){
    //return'Hello,'.$name;
//});

//3. 修改參數成選擇性
//Route::get('hello/{name?}',function($name='Everybody'){
//return'Hello,'.$name;
//});

//4-1. 將 Route 取名為 hello.index
Route::get('hello/{name?}',['as'=>'hello.index',function($name= 'Everybody'){
    return'Hello,'.$name;
}]);

//3. 修改 Route 裡的路徑
//Route::get('say/{name?}',['as'=>'hello.index',function($name= 'Everybody'){
    //return view('welcome');
//}]);

//5-1. 設定 dashboard路徑的 Route
Route::get('dashboard',function(){
    return'dashboard';
});

//2. 設定另一個 Route 以群組包起來設定 prefix
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admindashboard';
    });
});
