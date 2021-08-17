<?php

use App\Project;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Laravel\Socialite\Facades\Socialite;
use App\DataTables\UsersDataTable;



Auth::routes(['register' => true]);
Auth::routes(['verify' => true]);


//Google Login

Route::get('login/google', 'Auth\LoginController@redirectToGoogle')->name('login.google');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

//Facebook Login

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');



// ------- Admin Route ------- //

Route::get('/admin', 'admin\HomeController@dashboard')->name('admin.dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    // ----- Projects Route ----- //
    Route::resource('improjects', 'ProjectsController');
    Route::resource('projects', 'ProjectsController');


    // ----- Scholarship Route ----- //

    Route::resource('scholarship', 'ScholarshipController');


    // ----- News Route ----- //
    Route::resource('news', 'NewsController');
});



// ----- Frontend Route ----- //

Route::group(['as' => 'frontend.', 'namespace' => 'frontend'], function () {
    Route::get('/', 'PagesController@home')->name('home');
    Route::get('about', 'PagesController@about')->name('about');
    Route::get('chairman', 'PagesController@chairman')->name('chairman');
    Route::get('trustees', 'PagesController@trustees')->name('trustees');
    Route::get('advisors', 'PagesController@advisors')->name('advisors');

    Route::get('ceo', 'PagesController@ceo')->name('ceo');
    Route::get('chart', 'PagesController@chart')->name('chart');
    Route::get('implemented', 'PagesController@implemented')->name('implemented');
    Route::post('dosend', 'PagesController@dosend');


    Route::get('donate/{id}', 'PagesController@donate')->name('donate');


    Route::get('projects/index', 'PagesController@index')->name('projects.index');

    Route::get('projects/show/{id}', 'PagesController@show')->name('show');

    Route::get('projectslist','PagesController@projectslist')->name('projectslist');


    Route::get('/scholarship/create', 'PagesController@create')->middleware('verified');

    Route::post('/scholarship', 'PagesController@store')->middleware('verified');


    // User profile
    Route::get('profile/{user}', 'ScholarshipController@profile')->name('profile');

    

    Route::resource('organization-news', 'NewsController', ["names" => "organization-news"]);
    
    ///view the form the application of a scholarship1
    Route::resource('scholarship', 'ScholarshipController');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('admin/scholarships', 'Admin\ScholarshipController', ['names' => 'scholarships']);

    ///Done a projet
    Route::patch('publish/{id}', "GeneralController@publishProject");

    Route::delete('/delete/{id}', 'GeneralController@delete');

    //show approved scholarships - delete scholarship the application
    Route::get('/admin/approved-scholarships', 'GeneralController@approvedScholarships')->name('admin.scholarships.approve');
    Route::get('/admin/rejected-scholarships', 'GeneralController@denyScholarships')->name('admin.scholarships.reject');
    Route::get('download/{id}', 'GeneralController@download')->name('download');

    ///(Approve or reject)  scholarships 
    Route::patch('/approve/{id}', 'GeneralController@approve');
    Route::patch('/deny/{id}', 'GeneralController@deny');

});

////Donate for projects 
Route::get('/donation-payment/{id}', 'PaymentController@handleGet');
Route::patch('/donation-payment/{id}',  'PaymentController@handlePost')->name('Payment.payment');


////General donation
Route::get('/donate', 'PaymentController@viewGeneralPayment');
Route::post('/donate', 'PaymentController@general_donation');


////Payment
Route::get('payment', 'PayPalController@payment')->name('payment');
Route::get('cancel', 'PayPalController@cancel')->name('payment.cancel');
Route::get('payment/success', 'PayPalController@success')->name('payment.success');


////Donate for projects 
Route::get('/paypal/{id}', 'PaymentController@handleGet');
Route::patch('/paypal/{id}',  'PaymentController@handlePost');

////////
 
//Route::get('send', 'HomeController@sendNotification');
