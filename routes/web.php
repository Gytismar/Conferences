<?php

use \App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ArticlesController;

$users = [
    ['id' => 2, 'vardas' => 'Petras', 'pavarde' => 'Petraitis', 'gimimo_data' => '2013-10-12'],
    ['id' => 35, 'vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'gimimo_data' => '2005-04-15'],
];


Route::get('/',  [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::resource('articles', ArticlesController::class);//->only(['index','show', 'create', 'store', 'edit', 'update']);// all CRUD is implemented

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'logout'])->name('logout');

Route::get('user/{id}', function ($id) use ($users) {
    $user = collect($users)->firstWhere('id', $id);

    if (!$user) {
        abort(404, 'User not found');
    }
    $age = Carbon::parse($user['gimimo_data']) -> age;

    if ($age > 13){
        return redirect() -> route('home.index');
    }
    else{
        abort(403);
    }
});

Route::get('/test', static function () {
    return 'This is a test page!';
})->name('home.test');

Route::get('/articles/{id}', static function ($id){
    $articles = [
        1 => ['title' => 'First article', 'content' => 'test1'],
        2 => ['title' => 'Second article', 'content' => 'test2']
    ];
    abort_if(!isset($articles[$id]), 404);
    return view('articles.show',['article' => $articles[$id]]);
})->name("articles.show");


//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
