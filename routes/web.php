<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'title' => 'Home',
    ];

    return view('home', $data);
});

Route::get('/about', function () {
    $data = [
        'title' => 'About',
        'name' => 'Yasha',
        'email' => 'yasha@gmail.com',
        'image' => ''
    ];

    return view('about', $data);
});

Route::get('/posts', function () {
    $posts = [
        [
            'title' => 'JavaScript',
            'body' => 'body',
        ]
    ];

    $data = [
        'title' => 'Posts'
    ];

    return view('posts', $data);
});

Route::prefix('books')->controller(BookController::class)->group(function () {
    Route::get('', 'books');
    Route::get('/{slug}', 'book');
    Route::get('/print/{slug}', 'bookPdf');
});

Route::prefix('tasks')->controller(TaskController::class)->group(function (): void {
    Route::get('', 'index');
});
