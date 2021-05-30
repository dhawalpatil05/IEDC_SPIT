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

//  Route::get('/', function () {
//      return view('welcome');
//  });

Route::view('/','mainh');
Route::view('/iedcportal','iedcportal');
Route::view('/iedc','iedc')->name('iedc');
Route::view('/judge_registration','judge_registration')->name('judge_registration');

Route::view('/login','login');
Route::view('/loginacc','loginacc');
Route::view('/posts','posts');
Route::view('/reports','reports');

Route::post('/iedc',"testpackCont@insert")->name('insert');

Route::post('/admin_page',"testpackCont@adminlogin")->name('admin_login');

Route::get('/mentor_data',"testpackCont@mentordata")->name('mentor_data');


Route::post('/add_ment_idea/mentor_data',"testpackCont@addmentidea")->name('add_ment_idea');

Route::post('/delete_ment/mentor_data',"testpackCont@deletement")->name('delete_ment');

Route::post('/add_mentor/mentor_data',"testpackCont@addmentor")->name('add_mentor');

Route::post('/mentor_login',"testpackCont@mentorlogin")->name('mentor_login');


Route::post('/mentor_monitor_p',"testpackCont@mentormonitorp")->name('mentor_monitor_p');


