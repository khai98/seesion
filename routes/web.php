<?php

Route::get('/welcome','SeesionController@login1')->name('welcome');

Route::get('/userLogin','SeesionController@showLogin')->name('user.login');

Route::post('/userLogin','SeesionController@login')->name('user.login');

Route::get('/logout', 'SeesionController@logout')->name('user.logout');

Route::get('/blog', 'BlogController@showBlog')->name('show.blog');

?>