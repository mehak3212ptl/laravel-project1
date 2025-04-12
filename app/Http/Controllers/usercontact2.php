<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_products_table;
use Intervention\Image\Facades\Image;

class usercontact2 extends Controller
{
     public function ajaxpage(){
        return view('ajax');       
    }


    public function deletedata(Request $req){
      create_products_table::where('id',$req->id)->delete(); 
      echo "data delted succesfully";
      
    }
   

   //  public function savedataajax(Request $request){
   //    $file = $request->file('image');
   //    $filename = time().'-'.uniqid().'.'.$file->getClientOriginalExtension();
   //    $file->move('asset',$filename);
   //    $product=new create_products_table;
   //    // parse_str($request->input('data'),$formdata);
   //    $product->name=$request->name;
   //    $product->price=$request->price;
   //    $product->image=$request->$filename;   
     
   //    if(empty($request->id)||($request->id==""))
   //    $product->save();
   //    else{
   //       $product=create_products_table::find($request->id);
   //       $product->name=$request->name;
   //       $product->price=$request->price;
   //       $product->image=$request->$filename;
   //       $product->update();
   //    }
   //    echo "changes made succesfully";
   // } 
   public function savedataajax(Request $request){
      $image = $request->file('image');
        $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
        $image->move('asset',$imageName);

        $tbl = new create_products_table;
        $tbl->name=$request->name;
        $tbl->price=$request->price;
        $tbl->image=$imageName;

        if(empty($formData['id'])||($formData['id']=="")){
            $tbl->save();
            return response()->json(['status' => 'success', 'message' => 'Product Added']);
        }
      else{
        $tbl=create_products_table::find($formData['id']);
        if (!$tbl) {
            return response()->json(['status' => 'error', 'message' => 'Product not found'], 404);
        }
        $tbl->name=$request->name;
        $tbl->price=$request->price;
        $tbl->image=$imageName;
        
        $tbl->update();
        return response()->json(['status' => 'success', 'message' => 'Product Updated']);
      }
   }



   public function getdataajax(){
      return create_products_table::orderBy('id','desc')->get();
   }
   

   public function editdataajax(Request $req){
      return create_products_table::find($req->id);   
   }
}

