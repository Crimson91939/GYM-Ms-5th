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
//Auth::routes();
Route::get('/', function () {
    return view('welcome');
})->name('land');


//auth
Route::GET('/register','Auth\memberRegisterController@viewregisterform')->name('register');
Route::POST('/register','Auth\memberRegisterController@register')->name('register.submit');


Route::prefix('admin')->name('admin.')->group(function()                //route for all admin
{  
    Route::get('/login','Auth\adminLoginController@showLoginform')->name('login');
    Route::Post('/login','Auth\adminLoginController@login')->name('login.submit');
    Route::get('/logout','Auth\adminLoginController@adminlogout')->name('logout');   
    Route::get('/dashboard','adminController@dashboard')->name('dashboard');

    Route::get('/addgym','adminController@addg')->name('addg');         //addgym 
    Route::Post('/addgym','adminController@addgym')->name('addgym');

    //gym
    Route::get('/activegym','adminController@activegym')->name('activegym');    //list active gym
    Route::get('/allgym','adminController@allgym')->name('allgym');             //list all gym
    Route::get('/gymview/{gym}','adminController@gymview')->name('gymview');    //gymview
    Route::get('/edit/{gym}','adminController@gedit')->name('agym.edit');
    Route::PUT('/update/{gym}','adminController@gupdate')->name('agym.update');
    Route::post('/changepasswordgym/{id}','adminController@passwordupdate')->name('password.update');
    Route::DELETE('/deletegym/{id}','adminController@gymhakai')->name('gym.hakai');

    Route::get('/allmembers/{id}','adminController@allmembers')->name('gym.allmembers');
    Route::get('/memview/{member}','adminController@memberview')->name('member.view');

    Route::get('/adminprofile','adminController@profile')->name('profile');
    Route::post('/adminprofile1','adminController@profileupdate')->name('profile.update');
    Route::get('/future','adminController@future')->name('future');
  

});

Route::prefix('member')->name('member.')->group(function()                //route for all member
{
    Route::get('/login','Auth\memberLoginController@showLoginform')->name('login');
    Route::Post('/login','Auth\memberLoginController@login')->name('login.submit');
    Route::get('/logout','Auth\memberLoginController@memberlogout')->name('logout'); 

    Route::get('/dashboard', 'memberController@dashboard')->name('dashboard'); 
    Route::get('/view','memberController@view')->name('view');
    Route::get('/edit','memberController@edit')->name('edit');
    Route::PUT('/update','memberController@update')->name('update');
    Route::post('/changepasswordmember','memberController@passwordupdate')->name('password.update');
    Route::get('/Watashiwa_Gym','memberController@gymview')->name('mygym');


    route::get('cardio','memberController@cardio')->name('cardio');
    route::get('weight','memberController@weight')->name('weight');
});

Route::prefix('gym')->name('gym.')->group(function()                //route for all gym
{
    Route::get('/login','Auth\gymLoginController@showLoginform')->name('login');    //login-page
    Route::Post('/login','Auth\gymLoginController@login')->name('login.submit');    //login
    Route::get('/logout','Auth\gymLoginController@gymlogout')->name('logout');      //logout
  
    Route::get('/activemembers','gymController@active_members')->name('active.members');
    Route::get('/inactivemembers','gymController@inactive_members')->name('inactive.members');
    Route::get('/dashboard','gymController@dashboard')->name('dashboard');

   Route::get('/memberview/{id}','gymController@memberview')->name('member.view');
   Route::get('/memberdelete/{id}','gymController@memberdelete')->name('member.delete');
   Route::POST('/memberpasswordupdate/{id}','gymController@memberpasswordupdate')->name('member.password.update');
   Route::get('/memberupdatepage/{id}','gymController@memberupdatepage')->name('member.update.page');
   Route::PUT('/memberupdate/{id}','gymController@memberupdate')->name('member.update'); 

   Route::get('/gymprofile','gymController@profile')->name('profile');
   Route::get('/admin','gymController@admin')->name('admin');
});


