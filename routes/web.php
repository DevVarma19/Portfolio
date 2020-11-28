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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/download', 'HomeController@download')->name('user.download-resume');

Route::post('/contact', 'Admin\ContactController@store')->name('user.store-contact');

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function(){

    //Admin Routes
    Route::get('/dashboard', 'Admin\AdminController@index')->name('admin.dashboard');


    // Service Routes
    Route::get('/services', 'Admin\ServiceController@index')->name('admin.services');

    Route::post('/services', 'Admin\ServiceController@store')->name('admin.create-service');

    Route::put('/services/{id}', 'Admin\ServiceController@update')->name('admin.update-service');

    Route::delete('/services/{id}', 'Admin\ServiceController@delete')->name('admin.delete-service');


    // Testimonial Routes
    Route::get('/testimonial', 'Admin\TestimonialsController@index')->name('admin.testimonial');

    Route::post('/testimonial', 'Admin\TestimonialsController@store')->name('admin.create-testimonial');

    Route::put('/testimonial/{id}', 'Admin\TestimonialsController@update')->name('admin.update-testimonial');

    Route::delete('/testimonial/{id}', 'Admin\TestimonialsController@delete')->name('admin.delete-testimonial');


    // Education Routes
    Route::get('/education', 'Admin\EducationController@index')->name('admin.education');

    Route::post('/education', 'Admin\EducationController@store')->name('admin.create-education');

    Route::put('/education/{id}', 'Admin\EducationController@update')->name('admin.update-education');

    Route::delete('/education/{id}', 'Admin\EducationController@delete')->name('admin.delete-education');


    // Work Routes
    Route::get('/work', 'Admin\WorkController@index')->name('admin.work');

    Route::post('/work', 'Admin\WorkController@store')->name('admin.create-work');

    Route::put('/work/{id}', 'Admin\WorkController@update')->name('admin.update-work');

    Route::delete('/work/{id}', 'Admin\WorkController@delete')->name('admin.delete-work');
    

    //Skills Routes
    Route::get('/skills', 'Admin\SkillController@index')->name('admin.skills');

    Route::post('/skills', 'Admin\SkillController@store')->name('admin.create-skills');

    Route::put('skills/{id}', 'Admin\SkillController@update')->name('admin.update-skills');
    
    Route::delete('/skills/{id}', 'Admin\SkillController@delete')->name('admin.delete-skills');


    //Portfolio Routes
    Route::get('/portfolio', 'Admin\PortfolioController@index')->name('admin.portfolio');

    Route::post('/portfolio', 'Admin\PortfolioController@store')->name('admin.create-portfolio');

    Route::put('/portfolio/{id}', 'Admin\PortfolioController@update')->name('admin.update-portfolio');

    Route::delete('/portfolio/{id}', 'Admin\PortfolioController@delete')->name('admin.delete-portfolio');


    // Contact Route
    Route::get('/contact', 'Admin\ContactController@index')->name('admin.contact');

    Route::get('/clear-contact', 'Admin\ContactController@clear')->name('admin.clear-contact');

    // User settings Route
    Route::get('/settings', 'Admin\AdminController@settings')->name('admin.settings');

    Route::post('/settings', 'Admin\AdminController@store')->name('admin.store');

});