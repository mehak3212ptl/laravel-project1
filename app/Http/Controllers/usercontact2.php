<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_products_table;

class usercontact2 extends Controller
{
     public function ajaxpage(){
        return view('ajax');       
    }
    // public function savedataajax(Request $request){
    //   $tbl=new create_products_table;
    //   parse_str($request->input('data'),$formData);
    //   $tbl->name=$formData['name'];
    //   $tbl->price=$formData['price'];
    //   if(empty($formData['id'])||($formData['id']==""))
    //   $tbl->save();
    //   else{
    //     $tbl=create_products_table::find($formdata['id']);
    //     $tbl->name=$formData['name'];
    //     $tbl->price=$formData['price'];
    //     $tbl->update();
    //   }
    //   echo "changes made succesfully ";

    // }
    // public function getdataajax(){
    //   return create_products_table::orderBy('id','desc')->get();
    // }
    // function editdataajax(Request $req){
    //   return create_products_table::find($req->id);
    // }

    public function deletedata(Request $req){
      create_products_table::where('id',$req->id)->delete(); 
      echo "data delted succesfully";
      
    }
   

    public function savedataajax(Request $request){
      $product=new create_products_table;
      parse_str($request->input('data'),$formdata);
      $product->name=$formdata['name'];
      $product->price=$formdata['price'];
      if(empty($formdata['id'])||($formdata['id']==""))
      $product->save();
      else{
         $product=create_products_table::find($formdata['id']);
         $product->name=$formdata['name'];
         $product->price=$formdata['price'];
         $product->update();
      }
      echo "changes made succesfully";
   }


   public function getdataajax(){
      return create_products_table::orderBy('id','desc')->get();
   }
   

   public function editdataajax(Request $req){
      return create_products_table::find($req->id);   
   }
}

