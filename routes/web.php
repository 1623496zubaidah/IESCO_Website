<?php

use App\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Socialite\Facades\Socialite;



Auth::routes(['register' => true]);

/* //Google Login

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect()->name('login.google');
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();

    // $user->token
});

// Facebook Login
Route::get('/auth/redirect', function () {
    return Socialite::driver('facebook')->redirect()->name('login.facebook');
});

Route::get('/auth/callback', function () {
    $user = Socialite::driver('facebook')->user();

    // $user->token
}); */


//Google Login

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');



//Facebook Login

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');



// ------- Admin Route ------- //

Route::get('/admin', 'admin\HomeController@dashboard')->name('admin.dashboard');
// Route::get('/admin/scholarship', 'admin\HomeController@scholarship')->name('admin.scholarships');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    // ----- Projects Route ----- //
    Route::resource('improjects', 'ImprojectsController');


    // Route::get('projects/{id}/show', 'ProjectsController@show')->name('projects.show');
    // Route::get('projects/{id}/edit', 'ProjectsController@edit')->name('projects.edit');
    // Route::put('projects/{id}', 'ProjectsController@update')->name('projects.update');
    // Route::delete('projects/{id}', 'ProjectsController@destroy')->name('projects.destroy');
    Route::resource('projects', 'ProjectsController');


    // ----- Scholarship Route ----- //




    // ----- News Route ----- //
    Route::resource('news', 'NewsController');
});

// ----- Frontend Route ----- //

Route::group(['as' => 'frontend.', 'namespace' => 'frontend'], function () {
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('about', 'PagesController@about')->name('about');
    Route::get('chairman', 'PagesController@chairman')->name('chairman');
    Route::get('trustees', 'PagesController@trustees')->name('trustees');
    Route::get('ceo', 'PagesController@ceo')->name('ceo');
    Route::get('chart', 'PagesController@chart')->name('chart');
    Route::get('implemented', 'PagesController@implemented')->name('implemented');



    Route::get('donate/{id}', 'PagesController@donate')->name('donate');

    /* Route::get('scholarship/store', 'PagesController@store')->name('scholarship.store');

 */

    Route::get('projects/index', 'PagesController@index')->name('projects.index');


    Route::get('/scholarship/create', 'PagesController@create');
    Route::post('/scholarship', 'PagesController@store');
    Route::resource('scholarship', 'ScholarshipController');

    Route::resource('organization-news', 'NewsController', ["names" => "organization-news"]);
    // Route::resource('improjects', 'ProjectsController');
});

///view the form the application of a scholarship1
Route::resource('apply', 'ApplyScholarship');




Route::group(['middleware' => ['auth']], function () {
    Route::resource('admin/scholarships', 'Admin\ScholarshipController', ['names' => 'scholarships']);
    ///publish a projet
    Route::patch('publish/{id}', "GeneralController@publishProject");

    Route::delete('/delete/{id}', 'GeneralController@delete');

    //show approved scholarships - delete scholarship the application
    Route::get('/admin/approved-scholarships', 'GeneralController@approScholarships')->name('admin.scholarships.approve');
    Route::get('/admin/rejected-scholarships', 'GeneralController@denyScholarships')->name('admin.scholarships.reject');
    Route::get('download/{id}', 'GeneralController@download')->name('download');

    ///(Approve or reject)  scholarships 
    Route::patch('/approve/{id}', 'GeneralController@approve');
    Route::patch('/deny/{id}', 'GeneralController@deny');

    /////////////////////    /////////////////////    /////////////////////

});



///Approve or reject the application

Route::resource('projects', 'frontend\ProjectsController');




////Donate for projects 
Route::get('/donation-payment/{id}', 'StripeController@handleGet');
Route::patch('/donation-payment/{id}',  'StripeController@handlePost')->name('stripe.payment');


////General donation
Route::get('/donate', 'StripeController@viewGeneralPayment');
Route::post('/donate', 'StripeController@general_donation');
