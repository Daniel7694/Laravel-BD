<?php

use App\Models\Phone;
use App\Models\post;
use App\Models\comment;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {

    $post = Post::find(2);

    $post->comments()->create([
        'content' => 'comentario de prueba',
    ]);

    return 'comentario creado';
});
