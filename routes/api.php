<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('agents')->group(function() {

Route::get('/signup', 'Landing\LandingController@signup')->name('agent.signup');
Route::get('/', 'Landing\LandingController@landing')->name('agent.landing');

Route::get('contact', 'Landing\LandingController@contact')->name('agent.contact');
Route::get('/login', 'Agent\SessionController@login')->name('api.agent.login');
<<<<<<< HEAD

Route::prefix('Operator')->group(function() {
    Route::get('/list', 'API_Controller\ApiOperatorsController@index');
    Route::post('/submit', 'API_Controller\ApiOperatorsController@submit');
    Route::post('/{id}/edit', 'API_Controller\ApiOperatorsController@edit');
    Route::get('/{id}/delete', 'API_Controller\ApiOperatorsController@delete');
    Route::get('/{id}/showone', 'API_Controller\ApiOperatorsController@showone');
    Route::get('/{id}/showOprContact', 'API_Controller\ApiOperatorsController@showOprContact');

    Route::post('/rateform_submit', 'API_Controller\ApiOperatorsController@operator_store_rateform');
    Route::get('/{id}/rateedit', 'API_Controller\ApiOperatorsController@operator_edit_rateform');
    Route::post('/{id}/rateeditsave', 'API_Controller\ApiOperatorsController@operator_editsave_rateform');
   
    Route::get('/rateformlist', 'API_Controller\ApiOperatorsController@operator_show_all');
    Route::get('/showpackages', 'API_Controller\ApiOperatorsController@operator_show_packages');
    Route::get('/{id}/showcity', 'API_Controller\ApiOperatorsController@operator_show_city');
    Route::get('/{id}/showtaxitype', 'API_Controller\ApiOperatorsController@operator_show_taxitype');
    Route::get('/{id}/ratedelete', 'API_Controller\ApiOperatorsController@operator_delete_rateform');
   
    
    //Route::get('/getoperatordetails', 'API_Controller\ApiOperatorsController@index');
});

Route::prefix('TaxiVaxiAgents')->group(function() {
    Route::post('/submit', 'API_Controller\ApiAgentController@submit');
    Route::get('/list', 'API_Controller\ApiAgentController@index');
    Route::get('/{id}/showone', 'API_Controller\ApiAgentController@showone');
    Route::post('/{id}/edit', 'API_Controller\ApiAgentController@edit');
});

Route::prefix('TaxiVaxiclients')->group(function() {

    Route::post('/submit', 'API_Controller\ApiCompanyController@submit');
    Route::get('/list', 'API_Controller\ApiCompanyController@index');
    Route::get('/{id}/showone', 'API_Controller\ApiCompanyController@showone');
    Route::get('/{id}/showone_user', 'API_Controller\ApiCompanyController@showone_user');
    Route::post('/{id}/edit', 'API_Controller\ApiCompanyController@edit');
    Route::get('/{id}/showmgmtfee', 'API_Controller\ApiCompanyController@showmgmtfee');
    Route::post('/{id}/editmgmtfee', 'API_Controller\ApiCompanyController@editmgmtfee');
    Route::post('/{id}/addnewusers', 'API_Controller\ApiCompanyController@addnewusers');
});

Route::prefix('TaxiVaxiclients_CompanyRate')->group(function() {
    Route::get('/createCompanyRate', 'API_Controller\ApiCompanyController@createCompanyRate');
    Route::post('/submitCompanyRate', 'API_Controller\ApiCompanyController@submitCompanyRate');
    Route::get('/listcomprate', 'API_Controller\ApiCompanyController@indexCompanyRate');
    Route::get('/{id}/showCompanyRate', 'API_Controller\ApiCompanyController@showCompanyRate');
    Route::post('/{id}/editCompanyRate', 'API_Controller\ApiCompanyController@editCompanyRate');
    Route::get('/{id}/deleteCompanyRate', 'API_Controller\ApiCompanyController@deleteCompanyRate');

    Route::get('/gettaxitype', 'API_Controller\ApiCompanyController@gettaxitype');
    Route::get('/getcity', 'API_Controller\ApiCompanyController@getcity');
    //Route::get('/gettaxitype', 'API_Controller\ApiCompanyController@gettaxitype');
});

Route::prefix('TaxiBookings')->group(function() {
    Route::post('/submit', 'API_Controller\ApiTaxiBookingsController@submit');
    Route::get('/list', 'API_Controller\ApiTaxiBookingsController@index');
    Route::get('/{id}/showone', 'API_Controller\ApiTaxiBookingsController@showpassenger');
    Route::get('/getcompany', 'API_Controller\ApiTaxiBookingsController@getcompanydetails');
    Route::get('/employeelist', 'API_Controller\ApiTaxiBookingsController@getallemployee');

    Route::get('/{id}/getallCompanyspoc', 'API_Controller\ApiTaxiBookingsController@getallCompanyspoc');
    Route::get('/{id}/getallemployee', 'API_Controller\ApiTaxiBookingsController@getallCompemployee');
    

});




=======
>>>>>>> e7c6be825e9fe5449f49f6885374a9f26878b683

Route::prefix('Operator')->group(function() {
    Route::get('/list', 'API_Controller\ApiOperatorsController@index');
    Route::post('/submit', 'API_Controller\ApiOperatorsController@submit');
    Route::post('/{id}/edit', 'API_Controller\ApiOperatorsController@edit');
    Route::get('/{id}/delete', 'API_Controller\ApiOperatorsController@delete');
    Route::get('/{id}/showone', 'API_Controller\ApiOperatorsController@showone');
    Route::get('/{id}/showOprContact', 'API_Controller\ApiOperatorsController@showOprContact');

    Route::post('/rateform_submit', 'API_Controller\ApiOperatorsController@operator_store_rateform');
    Route::get('/{id}/rateedit', 'API_Controller\ApiOperatorsController@operator_edit_rateform');
    Route::post('/{id}/rateeditsave', 'API_Controller\ApiOperatorsController@operator_editsave_rateform');

    Route::get('/rateformlist', 'API_Controller\ApiOperatorsController@operator_show_all');
    Route::get('/showpackages', 'API_Controller\ApiOperatorsController@operator_show_packages');
    Route::get('/{id}/showcity', 'API_Controller\ApiOperatorsController@operator_show_city');
    Route::get('/{id}/showtaxitype', 'API_Controller\ApiOperatorsController@operator_show_taxitype');
    Route::get('/{id}/ratedelete', 'API_Controller\ApiOperatorsController@operator_delete_rateform');


    //Route::get('/getoperatordetails', 'API_Controller\ApiOperatorsController@index');
});

Route::prefix('TaxiVaxiAgents')->group(function() {
    Route::post('/submit', 'API_Controller\ApiAgentController@submit');
    Route::get('/list', 'API_Controller\ApiAgentController@index');
    Route::get('/{id}/showone', 'API_Controller\ApiAgentController@showone');
    Route::post('/{id}/edit', 'API_Controller\ApiAgentController@edit');
});

Route::prefix('TaxiVaxiclients')->group(function() {

    Route::post('/submit', 'API_Controller\ApiCompanyController@submit');
    Route::get('/list', 'API_Controller\ApiCompanyController@index');
    Route::get('/{id}/showone', 'API_Controller\ApiCompanyController@showone');
    Route::get('/{id}/showone_user', 'API_Controller\ApiCompanyController@showone_user');
    Route::post('/{id}/edit', 'API_Controller\ApiCompanyController@edit');
    Route::get('/{id}/showmgmtfee', 'API_Controller\ApiCompanyController@showmgmtfee');
    Route::post('/{id}/editmgmtfee', 'API_Controller\ApiCompanyController@editmgmtfee');
    Route::post('/{id}/addnewusers', 'API_Controller\ApiCompanyController@addnewusers');
});

Route::prefix('TaxiVaxiclients_CompanyRate')->group(function() {
    Route::get('/createCompanyRate', 'API_Controller\ApiCompanyController@createCompanyRate');
    Route::post('/submitCompanyRate', 'API_Controller\ApiCompanyController@submitCompanyRate');
    Route::get('/listcomprate', 'API_Controller\ApiCompanyController@indexCompanyRate');
    Route::get('/{id}/showCompanyRate', 'API_Controller\ApiCompanyController@showCompanyRate');
    Route::post('/{id}/editCompanyRate', 'API_Controller\ApiCompanyController@editCompanyRate');
    Route::get('/{id}/deleteCompanyRate', 'API_Controller\ApiCompanyController@deleteCompanyRate');

    Route::get('/gettaxitype', 'API_Controller\ApiCompanyController@gettaxitype');
    Route::get('/getcity', 'API_Controller\ApiCompanyController@getcity');
    //Route::get('/gettaxitype', 'API_Controller\ApiCompanyController@gettaxitype');
});

Route::prefix('TaxiBookings')->group(function() {
    Route::post('/submit', 'API_Controller\ApiTaxiBookingsController@submit');
    Route::get('/list', 'API_Controller\ApiTaxiBookingsController@index');
    Route::get('/{id}/showone', 'API_Controller\ApiTaxiBookingsController@showpassenger');
    Route::get('/getcompany', 'API_Controller\ApiTaxiBookingsController@getcompanydetails');
    Route::get('/employeelist', 'API_Controller\ApiTaxiBookingsController@getallemployee');
    Route::get('/listunassigned', 'API_Controller\ApiTaxiBookingsController@active_unassigned');
});





  });
