<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class SubcategoryController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
       $subcategory=DB::table('subcategories')->join('categories','subcategories.category_id','categories.id')->select('categories.category_bn','categories.category_en','subcategories.*')->get();
       $category=DB::table('categories')->get();
       return view('admin.subcategory.index',compact('subcategory','category'));
    }

    public function subCategoryStore(Request $request){
        // dd($request);
        $validated = $request->validate([
            'category_id' => '|max:55',
            'subcategory_bn' => '|unique:subcategories|max:55',
            'subcategory_en' => '|unique:subcategories|max:55',
        ]);


        $data=array();
        $data['category_id']=$request->category_id;
        $data['subcategory_bn']=$request->subcategory_bn;
        $data['subcategory_en']=$request->subcategory_en;
        DB::table('subcategories')->insert($data);
    // dd($data);
        $notification=array(
            'messege'=>'Successfully Added',
            'alert-type'=>'success'
             );
return Redirect()->back()->with($notification);

    }

                     
    public function subCategoryDelete($id){

        DB::table('subcategories')->where('id',$id)->delete();
   
           $notification=array(
               'messege'=>'Successfully Delete',
               'alert-type'=>'success'
                );
   return Redirect()->back()->with($notification);
       }
public function getEditData($id){

    $sub=DB::table('subcategories')->where('id',$id)->first();
    // dd($subCategory);
    $category=DB::table('categories')->get();
    return view('admin.subcategory.edit',compact('sub','category'));
}

public function subCategoryUpdate(Request $request , $id){
    // $validated = $request->validate([
    //     'category_bn' => 'required|max:55',
    //     'category_en' => 'required|max:55',
    // ]);

    $data=array(); 
    $data['category_id']=$request->category_id;
    $data['subcategory_bn']=$request->subcategory_bn;
    $data['subcategory_en']=$request->subcategory_en;
    DB::table('subcategories')->where('id',$id)->update($data);
  
    $notification=array(
        'messege'=>'Successfully Update',
        'alert-type'=>'success'
         );
return Redirect('subcategories')->with($notification);

}






}
