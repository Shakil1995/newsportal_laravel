<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class SubDistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function subDistrictIndex(){
    //     $subdistrict=DB::table('subdistricts')->get();
    //     return view('admin.district.sub_dictrict',compact('subdistrict'));
    //  }

     public function subDistrictIndex(){
        $subdistrict=DB::table('subdistricts')->join('districts','subdistricts.district_id','districts.id')->select('districts.district_bn','districts.district_en','subdistricts.*')->get();
        $district=DB::table('districts')->get();
        return view('admin.district.sub_dictrict',compact('subdistrict','district'));
     }

     public function subdistrictStore(Request $request){
//   dd($request);
        $validated = $request->validate([
            'district_id' => 'required|max:55',
            'subdistrict_bn' => 'required|unique:subdistricts|max:55',
            'subdistrict_en' => 'required|unique:subdistricts|max:55',
        ]);


        $data=array();
        $data['district_id']=$request->district_id;
        $data['subdistrict_bn']=$request->subdistrict_bn;
        $data['subdistrict_en']=$request->subdistrict_en;
        DB::table('subdistricts')->insert($data);
    // dd($data);
        $notification=array(
            'messege'=>'Successfully Added',
            'alert-type'=>'success'
             );
return Redirect()->back()->with($notification);

    }

    public function subDistrictDelete($id){

        DB::table('subdistricts')->where('id',$id)->delete();
   
           $notification=array(
               'messege'=>'Successfully Delete',
               'alert-type'=>'success'
                );
   return Redirect()->back()->with($notification);
       }


       public function getEditData($id){

        $subdistrict=DB::table('subdistricts')->where('id',$id)->first();
        // dd($subCategory);
        $district=DB::table('districts')->get();
        return view('admin.district.edit_sub_district',compact('subdistrict','district'));
    }
    
    public function subdistrictUpdate(Request $request , $id){
        // $validated = $request->validate([
        //     'category_bn' => 'required|max:55',
        //     'category_en' => 'required|max:55',
        // ]);
    
        $data=array(); 
        $data['district_id']=$request->district_id;
        $data['subdistrict_bn']=$request->subdistrict_bn;
        $data['subdistrict_en']=$request->subdistrict_en;
        // dd($data);
        DB::table('subdistricts')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
             );
    return Redirect('subdistrict')->with($notification);
    
    }


}
