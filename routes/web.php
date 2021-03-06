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


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {

    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index',
        'middleware' => 'roles',
        'roles' => 'Admin'
    ]);

    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create',
        'middleware' => 'roles',
        'roles' => 'Admin'
    ]);

    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create',
        'middleware' => 'roles',
        'roles' => 'Admin'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit',
        'middleware' => 'roles',
        'roles' => 'Admin'
    ]);

    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update',
        'middleware' => 'roles',
        'roles' => 'Admin'
    ]);
    Route::get('delete/{id}', [
        'uses' => 'PostController@getAdminDelete',
        'as' => 'admin.delete',
        'middleware' => 'roles',
        'roles' => 'Admin'
    ]);
});

Auth::routes();

Route::post('login', [
    'uses' => 'AuthenticationController@signin',
    'as' => 'auth.signin'
]);