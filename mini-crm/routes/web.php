<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware('auth:web', 'verified')->group(function () {

     Route::get('/dashboard', function () {
        return view('dashboard1');
    })->name('dashboard');

Route::view('/welcome', 'welcome');

Route::get('/companyIndex', [CompanyController::class, 'Index'])->name('company.index');

Route::post('/storeCompany',[CompanyController::class, 'storeCompany'])->name('store.company');


});
