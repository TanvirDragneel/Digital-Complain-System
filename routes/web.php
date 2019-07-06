<?php



/*Route::get('/editprofile/{id}', 'profileController');*/
Route::resource('category','categorycontroller');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('complain','complaincontroller');
Route::resource('profile','profileController');
Route::resource('judgepanel','judgepanelcontroller');


/************Extra Route****************************/
Route::get('/allcomplain','complaincontroller@allcomplains');
Route::get('/judge','judgecontroller@index')->name('judge');
Route::post('/comment','complaincontroller@comment')->name('comment');
