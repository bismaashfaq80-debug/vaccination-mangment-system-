<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\appiontment;
use App\Http\Controllers\AppointmentContrller;
use App\Http\Controllers\contact;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Product;
use App\Models\wishlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/contact', function () {
    return view('contact' );
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/error', function () {
    return view('error');
});

Route::get('/docs', function () {
        return view('admin.docs');
    });

// contact controller
Route::post('contact',[Contact::class,'contactdatas']);

Route::post('/appointment',[appiontment::class,'appointmentd']);



// Middleware
Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/adminp', function () {
        return view('admin.index');

    });

// fetch
Route::get('/docs',[admincontroller::class,'getcontacts']);

// delete
Route::post('/delete/{id}',[admincontroller::class,'deletecontact']);

// update 
Route::get('/update/{id}', [admincontroller::class, 'updatecontact']);
// update after update
Route::post('/updaterecord', [admincontroller::class, 'updatecontactdata']);
});


// trash
Route::get('/docs/trash',[admincontroller::class,'getcontactqueries']);

Route::post('/trash/{userid}',[admincontroller::class,'trashrecord']);

Route::get('/trashitem',[admincontroller::class,'trasheditem']);
// restore
Route::post('/restore/{id}',[admincontroller::class,'restoreRecord']);

    // prodects
Route::get('/updateprodect', function () {
    return view('admin.updateprodect');
});

Route::get('/shop',[Contact::class,'getprodects']);
 
// submitprodect
Route::post('/submitprodect',[admincontroller::class,'submitprodect']);
 
// cart item
Route::get('/cart',[Contact::class,'getcartdata']);
// add to cart
Route::post('/addtocart/{id}',[contact::class,'addtocart']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
         if(Auth::user()->role == "admin")
        {
return view('admin.index');
        }
        else
        {
return redirect('/');
        }
    })->name('dashboard');

});

Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/host', function () {
        return view('hospital.index');

    });
 });
  Route::get('/request', [admincontroller::class, 'request']);
