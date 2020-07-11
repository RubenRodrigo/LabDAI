<?php



Route::redirect('/', '/posts');
Route::redirect('/home', '/posts');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');

Route::get('/posts/myPosts', 'PostController@userPosts');

Route::get('/posts/{id}', 'PostController@show')->name('post');

Route::delete('/posts/{id}', 'PostController@destroyPost');

Route::post('/comments', 'CommentController@store');

Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');

Route::delete('/delete/user/{id}', 'UserController@deleteUser');

# Notificaciones
Route::get('/notifications/{id}', 'UserController@showNotifications');

Auth::routes();
?>