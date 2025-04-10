<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create_products_table;

class usercontact2 extends Controller
{
    function contact2(){
        return view('contact2');       
    }
    public function addproduct(Request $request){
        $request->validate(
            [
                'name'=>'required|unique:products',
                'price'=>'required',
            ],
            [
               'name.required'=>'Name is required',
               'name.unique'=>'Product is already satisfied',
               'price.requied'=>'price is required'
            ]
            );
            $product=new create_products_table();
            $product->name=$request->name;
            $product->price=$request->price;
            $product->save();
            return response()->json([
                'status'=>'success'
            ]);
    }
    public function addproducts(Request $request){
        
        $request->validate([
            'name'=>"required|max:255|string",
            'price'=>"required|max:255|string",

        ]) ;       
        create_products_table::create([
            'name'=>$request->name,
            'price'=>$request->price,
        ]);
        
        return redirect()->back()->with('status','Inserted');
    }
    public function showdata2(){
        // dd("jhvjh");
        $products=create_products_table::get();
        // dd($products);
        return view('contact2',["data"=>$products]);       
    }
    public function deleteproduct(int $id ){

        $del=create_products_table::findOrFail($id);
        $del->delete();    
        return response()->json(['status'=>true]) ;          
     }
}
