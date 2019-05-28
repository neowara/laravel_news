<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
]);

Route::get('fashion', function () {

    $fashion = DB::table('posts')->where('category', 'fashion')->get();
    return view('blog.fashion', ['fashion' =>  $fashion]);
    
})->name('blog.fashion');

Route::get('nature', function () {

    $nature = DB::table('posts')->where('category', 'nature')->get();
    return view('blog.nature', ['nature' =>  $nature]);
    
})->name('blog.nature');

Route::get('sports', function () {

    $sports = DB::table('posts')->where('category', 'sports')->get();
    return view('blog.sports', ['sports' =>  $sports]);
    
})->name('blog.sports');


Route::get('technology', function () {

    $technology = DB::table('posts')->where('category', 'technics')->get();
    return view('blog.technology', ['technology' =>  $technology]);
    
})->name('blog.technology');

Route::get('culture', function () {

    $culture = DB::table('posts')->where('category', 'people')->get();
    return view('blog.culture', ['culture' =>  $culture]);
    
})->name('blog.culture');

Route::get('post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.post'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');


Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);

    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);
});

Auth::routes();

Route::post('login', [
    'uses' => 'AuthenticationController@signin',
    'as' => 'auth.signin'
]);