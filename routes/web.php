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
        Route::get('/{id}/showusers', 'TVAgent\CompanyController@showusers')->name('Agent.show-TaxiVaxiclients_user');
        Route::post('/{id}/edit', 'TVAgent\CompanyController@edit')->name('Agent.edit-TaxiVaxiclients');
        Route::get('/{id}/showmgmtfee', 'TVAgent\CompanyController@showmgmtfee')->name('Agent.show-TaxiVaximgmtfee');
        Route::post('/{id}/editmgmtfee', 'TVAgent\CompanyController@editmgmtfee')->name('Agent.edit-TaxiVaximgmtfee');
        Route::post('/{id}/addnewusers', 'TVAgent\CompanyController@addnewusers')->name('Agent.store-TaxiVaxiclients_users');
    });

    Route::prefix('TaxiBookings')->group(function() {
        Route::get('/create', 'TVAgent\TaxiBookingsController@create')->name('Agent.create-TaxiBookings');
        Route::post('/submit', 'TVAgent\TaxiBookingsController@submit')->name('Agent.store-TaxiBookings');
        Route::get('/', 'TVAgent\TaxiBookingsController@index')->name('Agent.TaxiBookings');
        Route::get('/{id}/show', 'TVAgent\TaxiBookingsController@showpassenger')->name('Agent.show-passengerdetail');
        Route::get('/unassigned', 'TVAgent\TaxiBookingsController@active_unassigned')->name('Agent.active-unassigned-TaxiBookings');
        Route::get('/{id}/assign-driver-taxi', 'TVAgent\TaxiBookingsController@assign_driver_taxi')->name('Agent.assign-driver-taxi');

        Route::post('/{id}/edittaxibooking', 'TVAgent\TaxiBookingsController@edittaxibooking')->name('Agent.edit-taxi-booking');
        Route::post('/{id}/cancelled', 'TVAgent\TaxiBookingsController@cancelled')->name('Agent.taxi-bookings-cancelled');
        Route::post('/{id}/storedrivertaxi', 'TVAgent\TaxiBookingsController@storedrivertaxi')->name('Agent.store-TaxiBookings-driver-taxi');
    });

        Route::prefix('Operator')->group(function() {
        Route::get('/create', 'TVAgent\OperatorsController@create')->name('Operator.create-operator');
        Route::post('/submit', 'TVAgent\OperatorsController@submit')->name('Operator.store-operator');
        Route::get('/', 'TVAgent\OperatorsController@index')->name('Operator.operator');
        Route::get('/{id}/show', 'TVAgent\OperatorsController@show')->name('Operator.show-operator');
        Route::post('/{id}/edit', 'TVAgent\OperatorsController@edit')->name('Operator.edit-operator');
        Route::get('/{id}/delete', 'TVAgent\OperatorsController@delete')->name('Operator.delete-operator');

        Route::get('/operator_rateform', 'TVAgent\OperatorsController@operator_rateform')->name('Operator.create-rateform');
        Route::post('/rateform_submit', 'TVAgent\OperatorsController@operator_store_rateform')->name('Operator.store-rateform');
        Route::get('/showrate', 'TVAgent\OperatorsController@operator_show_rateform')->name('Operator.show-rateform');
        Route::get('/{id}/rateedit', 'TVAgent\OperatorsController@operator_edit_rateform')->name('Operator.edit-rateform');
        Route::post('/{id}/rateeditsave', 'TVAgent\OperatorsController@operator_editsave_rateform')->name('Operator.editsave-rateform');
        Route::get('/{id}/ratedelete', 'TVAgent\OperatorsController@operator_delete_rateform')->name('Operator.delete-rateform');


    });


    Route::prefix('TaxiVaxiclients_CompanyRate')->group(function() {
        Route::get('/createCompanyRate', 'TVAgent\CompanyController@createCompanyRate')->name('Agent.create-TaxiVaxiclients_CompanyRate');
        Route::post('/submitCompanyRate', 'TVAgent\CompanyController@submitCompanyRate')->name('Agent.store-TaxiVaxiclients_CompanyRate');
        Route::get('/', 'TVAgent\CompanyController@indexCompanyRate')->name('Agent.TaxiVaxiclients_CompanyRate');
        Route::get('/{id}/showCompanyRate', 'TVAgent\CompanyController@showCompanyRate')->name('Agent.show-TaxiVaxiclients_CompanyRate');
        Route::post('/{id}/editCompanyRate', 'TVAgent\CompanyController@editCompanyRate')->name('Agent.edit-TaxiVaxiclients_CompanyRate');
        Route::get('/{id}/deleteCompanyRate', 'TVAgent\CompanyController@deleteCompanyRate')->name('Agent.delete-TaxiVaxiclients_CompanyRate');
    });

        Route::prefix('Operator')->group(function() {
        Route::get('/create', 'TVAgent\OperatorsController@create')->name('Operator.create-operator');
        Route::post('/submit', 'TVAgent\OperatorsController@submit')->name('Operator.store-operator');
        Route::get('/', 'TVAgent\OperatorsController@index')->name('Operator.operator');
        Route::get('/{id}/show', 'TVAgent\OperatorsController@show')->name('Operator.show-operator');
        Route::post('/{id}/edit', 'TVAgent\OperatorsController@edit')->name('Operator.edit-operator');
        Route::get('/{id}/delete', 'TVAgent\OperatorsController@delete')->name('Operator.delete-operator');

        Route::get('/operator_rateform', 'TVAgent\OperatorsController@operator_rateform')->name('Operator.create-rateform');
        Route::post('/rateform_submit', 'TVAgent\OperatorsController@operator_store_rateform')->name('Operator.store-rateform');
        Route::get('/showrate', 'TVAgent\OperatorsController@operator_show_rateform')->name('Operator.show-rateform');
        Route::get('/{id}/rateedit', 'TVAgent\OperatorsController@operator_edit_rateform')->name('Operator.edit-rateform');
        Route::post('/{id}/rateeditsave', 'TVAgent\OperatorsController@operator_editsave_rateform')->name('Operator.editsave-rateform');
        Route::get('/{id}/ratedelete', 'TVAgent\OperatorsController@operator_delete_rateform')->name('Operator.delete-rateform');


    });


    Route::prefix('TaxiVaxiclients_CompanyRate')->group(function() {
        Route::get('/createCompanyRate', 'TVAgent\CompanyController@createCompanyRate')->name('Agent.create-TaxiVaxiclients_CompanyRate');
        Route::post('/submitCompanyRate', 'TVAgent\CompanyController@submitCompanyRate')->name('Agent.store-TaxiVaxiclients_CompanyRate');
        Route::get('/', 'TVAgent\CompanyController@indexCompanyRate')->name('Agent.TaxiVaxiclients_CompanyRate');
        Route::get('/{id}/showCompanyRate', 'TVAgent\CompanyController@showCompanyRate')->name('Agent.show-TaxiVaxiclients_CompanyRate');
        Route::post('/{id}/editCompanyRate', 'TVAgent\CompanyController@editCompanyRate')->name('Agent.edit-TaxiVaxiclients_CompanyRate');
        Route::get('/{id}/deleteCompanyRate', 'TVAgent\CompanyController@deleteCompanyRate')->name('Agent.delete-TaxiVaxiclients_CompanyRate');
    });

  });
