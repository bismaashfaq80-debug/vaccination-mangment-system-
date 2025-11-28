<?php

namespace App\Http\Controllers;

use App\Models\hospitalupload;
use Illuminate\Http\Request;
use App\Models\vaccine;

class HospitalController extends Controller
{
    public function gethospitals()
    {
        $hospitalupload = hospitalupload::get();
        return view('hospital.vaccineupload', compact('hospitalupload'));
    }
    // public function addvaccines(Request $req)
    // {
    //     $hospitalid = $req->hospitallist;
    //     $vaccinename  = $req->vaccinename;
    //     $table = new vaccine();
    //     $table->vaccinename = $vaccinename;
    //     $table->hospitalid - $hospitalid;
    //     $table->save();
    //     return redirect()->back();

    // }

    public function addvaccines(Request $req)
{
    $req->validate([
        'vaccinename' => 'required',
        'hospitallist' => 'required'
    ]);

    $table = new vaccine();
    $table->vaccinename = $req->vaccinename;
    $table->hospitalid = $req->hospitallist;
    $table->save();

    return redirect()->back()->with('message', 'Vaccine added successfully');
}

}
