<?php

use App\Http\Controllers\PostController;

Route::resource('post', PostController::class);
Route::get('/', function () {
    return redirect('/posts');
});
