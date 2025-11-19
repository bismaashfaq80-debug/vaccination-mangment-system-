<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;
use Illuminate\Support\Facades\Auth;

class appiontment extends Controller
{
    //
    public function appointmentd(Request $request){
    $table=new appointment();
    $table->name=$request->name;
    $table->email=$request->email;
    $table->phone=$request->phone;
    $table->date=$request->date;
    $table->hospital=$request->hospital;
    $table->vaccination=$request->vaccination;
    $table->message=$request->message;
    $table->user_id = Auth::user()->id;
    $table->save();
    return redirect()->back();
   }

}
