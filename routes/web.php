<?php



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function(){

return view('/home');
});
Route :: get('/dashboard ' , function(){
 return 'dashboard';
});
