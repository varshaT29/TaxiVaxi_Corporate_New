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

/*Route::get('/Agents', function () {
    return view('Agents/welcome');
});*/


Route::prefix('agents')->group(function() {

    Route::get('/signup', 'TVAgent\Landing\LandingController@signup')->name('agent.signup');
    Route::get('/', 'TVAgent\Landing\LandingController@landing')->name('agent.landing');
    Route::get('contact', 'TVAgent\Landing\LandingController@contact')->name('agent.contact');
    Route::get('/login', 'TVAgent\SessionController@login')->name('agent.login');
    Route::get('/reset-password', 'TVAgent\SessionController@resetPassword')->name('agent.reset-password');
    Route::post('/login', 'TVAgent\SessionController@post_login')->name('agent.post-login');
    Route::post('/reset-password', 'TVAgent\SessionController@postResetPassword')->name('agent.post-reset-password');
    Route::get('/logout', 'TVAgent\AgentHomeController@logout')->name('agent.logout');
    Route::get('/dashboard', 'TVAgent\AgentHomeController@dashboard')->name('agent.dashboard');



    Route::prefix('TaxiVaxiAgents')->group(function() {
        Route::get('/create', 'TVAgent\AgentController@create')->name('Agent.create-agents');
        Route::post('/submit', 'TVAgent\AgentController@submit')->name('Agent.store-Agent');
        Route::get('/', 'TVAgent\AgentController@index')->name('Agent.agents');
        Route::get('/{id}/show', 'TVAgent\AgentController@show')->name('Agent.show-agent');
        Route::post('/{id}/edit', 'TVAgent\AgentController@edit')->name('Agent.edit-agent');
    });

    Route::prefix('TaxiVaxiclients')->group(function() {
        Route::get('/create', 'TVAgent\CompanyController@create')->name('Agent.create-TaxiVaxiclients');
        Route::post('/submit', 'TVAgent\CompanyController@submit')->name('Agent.store-TaxiVaxiclients');
        Route::get('/', 'TVAgent\CompanyController@index')->name('Agent.TaxiVaxiclients');
        Route::get('/{id}/show', 'TVAgent\CompanyController@show')->name('Agent.show-TaxiVaxiclients');
        Route::post('/{id}/edit', 'TVAgent\CompanyController@edit')->name('Agent.edit-TaxiVaxiclients');
        Route::get('/{id}/showmgmtfee', 'TVAgent\CompanyController@showmgmtfee')->name('Agent.show-TaxiVaximgmtfee');
        Route::post('/{id}/editmgmtfee', 'TVAgent\CompanyController@editmgmtfee')->name('Agent.edit-TaxiVaximgmtfee');
    });

    Route::prefix('TaxiBookings')->group(function() {
        Route::get('/create', 'TVAgent\TaxiBookingsController@create')->name('Agent.create-TaxiBookings');
        Route::post('/submit', 'TVAgent\TaxiBookingsController@submit')->name('Agent.store-TaxiBookings');
        Route::get('/', 'TVAgent\TaxiBookingsController@index')->name('Agent.TaxiBookings');
        Route::get('/{id}/show', 'TVAgent\TaxiBookingsController@showpassenger')->name('Agent.show-passengerdetail');
    });

  });
