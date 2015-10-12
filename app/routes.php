<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/***********
 *
 * Home 
 *
 ***********/
Route::get('/', 'HomeController@showIndex');

/***********
 *
 * Euler 
 *
 ***********/
Route::get('/euler/large_sum', 'EulerController@showLargeSum');
Route::get('/euler/largest_prime_factor', 'EulerController@showLargestPrimeFactor');

/***********
 *
 * Postwork
 *
 ***********/
Route::get('/postwork/sum_up/{input?}', 'PostworkController@showSumUp');
