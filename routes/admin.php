<?php
Route::group(['prefix'=>'admin'],function (){

    Route::get('cat',function (){
        return view('admin.admincato');
    });

});
