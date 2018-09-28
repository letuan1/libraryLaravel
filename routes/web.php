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

/**
 * bài login từ dòng 17 đến dòng 28;
 */
Route::get('/login', function () {
    return view('login.login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('login.welcome_admin');
    }

    return view('login.login_error');
});

/**
 * bài Product Discount Calculator;
 */

Route::get('/ProductDiscountCalculator', function () {
    return view('ProductDiscountCalculator.productDiscountCalculatorPage1');
});

Route::post('/ProductDiscountCalculator', function () {
     return view('ProductDiscountCalculator.page2');
});