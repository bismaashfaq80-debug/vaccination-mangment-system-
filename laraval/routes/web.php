<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\appiontment;
use App\Http\Controllers\AppointmentContrller;
use App\Http\Controllers\contact;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [admincontroller::class,('gethospitals')]);
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

Route::get('/adminh', function () {
        return view('admin.adminh');
    });
Route::get('/appiontmenthospital', function () {
        return view('admin.appiontmenthospital');
    });

// contact controller
Route::post('contact',[Contact::class,'contactdatas']);

Route::post('appointment',[appiontment::class,'appointmentd']);



// Middleware
Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/adminh', function () {
        return view('admin.adminh');

    });

// fetch
Route::get('/adminh',[admincontroller::class,'getcontacts']);

// delete
Route::post('/delete/{id}',[admincontroller::class,'deletecontact']);

// update 
Route::get('/update/{id}', [admincontroller::class, 'updatecontact']);
// update after update
Route::post('/updaterecord', [admincontroller::class, 'updatecontactdata']);
});


// trash
Route::get('/adminh/trash',[admincontroller::class,'getcontactqueries']);

Route::post('/trash/{userid}',[admincontroller::class,'trashrecord']);

Route::get('/trashitem',[admincontroller::class,'trasheditem']);
// restore
Route::post('/restore/{id}',[admincontroller::class,'restoreRecord']);
// appiontment  hospital



    // hospitals
Route::get('/updatehospital', function () {
    return view('admin.hospital');
});

Route::get('/index',[Contact::class,'index']);
 
// submithospital
Route::post('/hospitalupdate',[admincontroller::class,'submithospital']);

 Route::get('/hospitalupdate', function () {
    return view('admin.hospitalupdate');
});
// admin middlewere
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
//  hospital to appointment
Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/host', function () {
        return view('hospital.request');

    });
 });
  Route::get('/request', [admincontroller::class, 'request']);

  Route::get('/hospitalup', function () {
        return view('admin.hospitalupload');
    });

Route::get('/vaccineup', [HospitalController::class, 'gethospitals']);

Route::post('/addhospital',[admincontroller::class,('addhospital')]);

Route::post('/addvaccine',[HospitalController::class,('addvaccines')]);
