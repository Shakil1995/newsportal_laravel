<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


class DistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $district=DB::table('districts')->get();
        return view('admin.district.district',compact('district'));
     }

     public function districtDelete($id){

        DB::table('districts')->where('id',$id)->delete();
   
           $notification=array(
               'messege'=>'Successfully Delete',
               'alert-type'=>'success'
                );
   return Redirect()->back()->with($notification);
       }
   

       public function districtStore(Request $request){
        $validated = $request->validate([
            'district_bn' => 'required|unique:districts|max:55',
            'district_en' => 'required|unique:districts|max:55',
        ]);
     
    // dd( $request);
        $data=array();
        $data['district_bn']=$request->district_bn;
        $data['district_en']=$request->district_en;
        // dd( $data);
        DB::table('districts')->insert($data);
      
        $notification=array(
            'messege'=>'Successfully Added',
            'alert-type'=>'success'
             );
return Redirect()->back()->with($notification);

    }


    public function getEditData($id){

        $district=DB::table('districts')->where('id',$id)->first();
        return view('admin.district.edit_dictrict',compact('district'));
    }

    public function districtUpdate(Request $request , $id){
        $validated = $request->validate([
            'district_bn' => 'required|max:55',
            'district_en' => 'required|max:55',
        ]);

        $data=array();
        $data['district_bn']=$request->district_bn;
        $data['district_en']=$request->district_en;
        DB::table('districts')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
             );
return Redirect('district')->with($notification);

    }
}
