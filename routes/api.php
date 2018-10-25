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

  });