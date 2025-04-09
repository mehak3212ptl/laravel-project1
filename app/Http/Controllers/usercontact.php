<?php

namespace App\Http\Controllers;
use App\Models\studentmodel;

use Illuminate\Http\Request;

class usercontact extends Controller
{
    function contact(){
        return view('contact');       
    }
    public function adduser(Request $request)
    {   
        $request->validate([
            'name'=>"required|max:255|string",
            'class'=>"required|max:255|string",
            'mobile'=>"required|string|between:9,11",
            'email'=>"required|regex:/(.+)@(.+)\.(.+)/i"
        ]) ;
        studentmodel::create([
            'name'=>$request->name,
            'class'=>$request->class,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
        ]);
        return redirect()->back()->with('status','Inserted');
    }
    public function showdata(){
        $student=studentmodel::get();
        return view('showdata',["data"=>$student]);       
    }
    public function delete(int $id ){
       $del=studentmodel::findOrFail($id);
       $del->delete();    
       return redirect()->back()->with('status','Deleted');           
    }

    public function edit( int $id ){
        $student=studentmodel::findOrFail($id); 
        return view('edit',["data"=>$student]);      
     }
     public function update(int $id ,Request $request){
        $request->validate([
            'name'=>"required|max:255|string",
            'class'=>"required|max:255|string",
            'mobile'=>"required|string|between:9,11",
            'email'=>"required|regex:/(.+)@(.+)\.(.+)/i"
        ]) ;
        studentmodel::findOrFail($id)->update([
            'name'=>$request->name,
            'class'=>$request->class,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
        ]); 
        return redirect('showdata')->with('status','updated');
    }

}

