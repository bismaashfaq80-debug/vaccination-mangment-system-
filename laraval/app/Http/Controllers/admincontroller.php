<?php

namespace App\Http\Controllers;

use Directory;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    //
    public function getcontacts(){
        $records = \App\Models\Contact::where('status','visible')->get();
        return view('admin.docs',compact('records'));
    }
    //  delete fetch
    public function deletecontact(Request $request){
        $id=$request->id;
        $data=\App\Models\Contact::find($id);
        $data->delete();
        return redirect()->back();
    }
    //  update fetch
    public function updatecontact($id){
        $data=\App\Models\Contact::find($id);
        return view('admin.update',compact('data'));
    }
    //  after update fetch  update
    public function updatecontactdata(Request $request){
        $id=$request->contactid;
        $data=\App\Models\Contact::find($id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->update();
        return redirect('/contactdetails');
    }

    // trash fetch
    public function getcontactqueries(){
        $records = \App\Models\Contact::where('status','visible')->get();
        return view('admin.trash',compact('records'));

    }
   
    // trash record
    public function trashrecord($userid){
        $data=\App\Models\Contact::find($userid);
        $data->status='not visible';
        $data->save();
        return redirect()->back();
    }

    // trashed items
    public function trasheditem(){
        $records = \App\Models\Contact::where('status','not visible')->get();
        return view('admin.trashitem',compact('records'));
    }
    
    // restore
    public function restoreRecord($id){
        $data=\App\Models\Contact::find($id);
        $data->status='visible';
        $data->save();
        return redirect()->back();
    }
 
// submit prodect
 public function submitprodect(Request $request){
    $table=new \App\Models\product();
    $table->productname=$request->productname;
    $table->productprice=$request->productprice;
    $table->productquantity=$request->productstock;
    $file = $request->file('productfile');
    $filename = $file->getClientOriginalName();
    $file->move('upload',$filename);
    $table->productfile=$filename;
    $table->save();
    return redirect()->back();

 }

 public function request(){
     $records = \App\Models\Contact::where('status','visible')->get();
     return view('hospital.request',compact('records'));
 }
}