<?php

namespace App\Http\Controllers;

use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Contact extends Controller
{
    //
   public function contactdatas(Request $request){
    $table=new \App\Models\Contact;
    $table->name=$request->name;
    $table->email=$request->email;
    $table->subject=$request->subject;
    $table->message=$request->message;
    $table->save();
    return redirect()->back();
   }

   public function getprodects(){
        $data=\App\Models\product::all();
        return view('shop',compact('data'));
       }

     // cart data   
     public function getcartdata(){
        $data=\App\Models\wishlist::all();
        return view('/cart',compact('data'));
       }
         // add to cart
         public function addtocart($id){
        $productid=$id;
        $userid=Auth::user()->$id;
        $table = new wishlist();
        $table->$productid =$productid;
        $table->$userid=$userid;
        $table->save();
        return redirect()->back();

         }

// submitprodect
    public function submitprodect(Request $request){
     $table=new \App\Models\prodect;
     $table->name=$request->name;
     $table->price=$request->price;
     $table->description=$request->description;
     $table->image=$request->image;
     $table->save();
     return redirect()->back();
    }
}
 
