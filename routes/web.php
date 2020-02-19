<?php

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
    return view('welcome');
});

Route::get('/samp',function(){
    return view('sample');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/sampledata/{count}',function($count)){
// echo "You will generate" .$count. "entries";
// });

//Route::get('/person', function(){
        //$person = factory(App\Person::class)->time(5)->create();
//});

Route::get('/person/validate/{username}/{password}', function($username,$password){
    $person = App\Person::where('username', $username)->where('password', $password)->count();

    if( $person == 1){
        echo "New user Successfully saved";
    }else{
        echo "There was an error saving the new user!";
    }
});


