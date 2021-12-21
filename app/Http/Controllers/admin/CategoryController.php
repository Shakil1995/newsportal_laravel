<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
       $category=DB::table('categories')->orderBy('id','DESC')->get();
       return view('admin.category.index',compact('category'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'category_bn' => 'required|unique:categories|max:55',
            'category_en' => 'required|unique:categories|max:55',
        ]);

        $data=array();
        $data['category_bn']=$request->category_bn;
        $data['category_en']=$request->category_en;
        DB::table('categories')->insert($data);
      
        $notification=array(
            'messege'=>'Successfully Added',
            'alert-type'=>'success'
             );
return Redirect()->back()->with($notification);

    }
    public function delete($id){

     DB::table('categories')->where('id',$id)->delete();

        $notification=array(
            'messege'=>'Successfully Delete',
            'alert-type'=>'success'
             );
return Redirect()->back()->with($notification);
    }

    public function edit($id){

        $category=DB::table('categories')->where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }


    public function update(Request $request , $id){
        $validated = $request->validate([
            'category_bn' => 'required|max:55',
            'category_en' => 'required|max:55',
        ]);

        $data=array();
        $data['category_bn']=$request->category_bn;
        $data['category_en']=$request->category_en;
        DB::table('categories')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
             );
return Redirect('categories')->with($notification);

    }






}
