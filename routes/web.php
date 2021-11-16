<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VisaController;

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

// Route::get('/', function () {
//     return view('user.home');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//
############################yyyyyyyyyyyyyyyby7 7yy7yyy########################
//HOME CONTROLLERSyyyyy
//


// DASHBOARD PAGE ROUTE
Route::get('/home', [HomeController::class, 'redirect']);


// END CONTACT PAGE

// INDEX PAGE ROUTE
Route::get('/', [HomeController::class, 'index']);
// END INDEX PAGE

// UAE VISA PAGE ROUTE
Route::get('/uaevisa', [HomeController::class, 'uaevisa']);
// END UAE Visa

//CONTACT PAGE ROUTE
Route::get('/contact', [HomeController::class, 'contact']);
//END CONTACT



//SINGLE TOUR PAGE ROUTE
Route::get('/tours/{id}', [HomeController::class, 'tours']);
//END CONTACT

//All FIXED Group TOurs
Route::get('/allfixedtours', [HomeController::class, 'allfixedtours']);

//
####################################################
//ALL ADMIN CONTROLLER



####################################################
//UAE TO GEORGIA TOURS


//THIS ROUTE WILL OPEN UAE TO GEORGIA PAGE WHERE ADMIN CAN CREATE UPCOMING TOURS
Route::get('/uaetours', [AdminController::class, 'uaetours']);

//THIS ROUTE WILL OPEN A VIEW TO UAE ALL UAE TO GEORGIA TOUR PAGE
Route::get('/viewuaetours', [AdminController::class, 'viewuaetours']);


// THIS ROUTE HANDLES THE FUNC TO UPLOAD UAE TO GEORGIA Tours
Route::post('/uploaduaetours', [AdminController::class, 'uploaduaetours']);



//DELETE UAE TOURS Route Page




//UPDATE


//
####################################################
//INDIA TO UAE TOURS
//

//THIS ROUTE WILL OPEN A VIEW WHERE WE CAN ADD INDIA TO UAE TOUR
Route::get('/indiatours', [AdminController::class, 'indiatours']);

//VIEW INDIA TOURS

// DELETE

// UPDATE



####################################################
//UAE VISA

//THIS ROUTE WILL OPEN A VIEW WHERE WE CAN SEE ALL UAE VISA POSTINGS
Route::get('/viewproducts', [AdminController::class, 'viewproducts']);

//THIS ROUTE WILL OPEN A PAGE WHERE WE CAN EDIT INDIVIDUAL UAE VISA POSTING BY ID
//its just opening a page where we can update d prod
Route::get('/updateproduct/{id}', [AdminController::class, 'updateproduct']);


//CArt
Route::post('/cart', [AdminController::class, 'cart']);
Route::post('/book', [AdminController::class, 'book']);


//THIS ROUTE HANDLES THE DELETE UAE VISA PROCESS, WHERE INDIVIDUAL POSTING CAN BE DELETED BY ID
Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);


//THIS ROUTE HANDLES THE UPDATE UAE VISA PROCESS, WHERE INDIVIDUAL POSTING CAN BE UPDATED BY ID//Main UPd
Route::post('/updatevisaproduct/{id}', [AdminController::class, 'updatevisaproduct']);
// END UAE VISA LISTING ROUTE

//THIS ROUTE HANDLES THE DELETE UAE VISA PROCESS, WHERE INDIVIDUAL POSTING CAN BE DELETED BY ID
Route::get('/deleteuaeproduct/{id}', [AdminController::class, 'deleteuaeproduct']);
//END DELETE UAE TOURS

#############################################
//UAE TOURS

//THIS ROUTE OPENS A NEW PAGE WHERE THE SPECIAED TOUR ID CAN BE UPDATED
Route::get('/updateuaetours/{id}', [AdminController::class, 'updateuaetours']);
//END DELETE UAE TOURS


//THIS IS WHERE THE UPDATE HAPPENS.
Route::post('/updateuaetoursproduct/{id}', [AdminController::class, 'updateuaetoursproduct']);



####################################################
//UAE VISA CONTROLLER
//THIS CONTROLLER HANDLES THE UAE VISA UPLOAD
//

//THIS VISA CONTROLLER HANDLES THE VISA PRODUCT UPLOAD FUNCTION FOR UAE VISA VISA, WHERE IA NEW VISA CAN BE UPLOADED
Route::post('uploadproduct', [VisaController::class, 'uploadproduct']);

Route::get('/product', [VisaController::class, 'product']);




####################################################
//Users

//THIS ROUTE IS GOING TO THE ADD USER ROUTE

Route::get('/addusers', [AdminController::class, 'addusers']);

//This ROUTE WIL SHPW ALL USERS
Route::get('/viewusers', [AdminController::class, 'viewusers']);

//This ROUTE WIL SHOW ALL USERS
Route::get('/orders', [AdminController::class, 'orders']);

// Route::get('/search', [AdminController::class, 'search']);


#########################
//Cart page Func

Route::get('/cartpage/{id}', [HomeController::class, 'cartpage']);

Route::get('/visacheckout/{id}', [HomeController::class, 'visacheckout']);
