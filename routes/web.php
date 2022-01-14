<?php

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

Route::view('/','welcome');

// Route::get('/about_us', 'AboutusController@index')->name('about_us');

Route::get('{pages}','AllPages')->name('pages')->where('pages','about_us|contact_us|donate|membership_application|volunteer_application');
Route::post('/submitDonate', 'DonateInfoController@submitDonate')->name('submit_donate');	//@submitDonate is a method
Route::post('/submitContact', 'ContactInfoController@submitContact')->name('submit_contact');
// Route::post('/submitMember', 'MemberInfoController@submitMember')->name('submit_member');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace("Admin")->prefix('admin')->group(function(){
 	Route::get('/', 'dashboardcontroller@index')->name('admin.home');

 	//donation route start
 	Route::resource('donation', 'DonationController');
 	//donation route end

 	//member route start
 	Route::resource('member', 'MemberController');
 	// Route::resource('member/request', 'MemberController');
 	//member route end

 	//volunteer route start
 	Route::resource('volunteer', 'VolunteerController');
 	//volunteer route end

 	Route::namespace('Auth')->group(function(){
	 	Route::get('/login', 'logincontroller@showloginform')->name('admin.login');
	 	Route::post('/login', 'LoginController@login');
	 	Route::post('logout', 'logincontroller@logout')->name('admin.logout');
 	});
});