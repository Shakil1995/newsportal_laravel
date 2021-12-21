<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Facades\DB as FacadesDB;

class adsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAdd(){
        $ads=DB::table('ads')->get();
        return view('admin.ads.ads_index',compact('ads'));

    }

    public function storeAdd(Request $request){
     
        $data=array();
        $data['link']=$request->link;
        if($request->type==2){
            $image=$request->ads;
            $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(970,90)->save('public/admin/ads_photo/'.$image_one);   
             $data['ads']='public/admin/ads_photo/'.$image_one;
             $data['type']=2;
             DB::table('ads') ->insert($data);
             $notification=array(
                'messege'=>'Successfully Added Post',
                'alert-type'=>'success'
                 );
                 return Redirect()->back()->with($notification);
        }else{
            $image=$request->ads;
            $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
            Image::make($image)->resize(500,500)->save('public/admin/ads_photo/'.$image_one);   
             $data['ads']='public/admin/ads_photo/'.$image_one;
             $data['type']=1;
             DB::table('ads') ->insert($data);
             $notification=array(
                'messege'=>'Successfully Added Post',
                'alert-type'=>'success'
                 );
                 return Redirect()->back()->with($notification);
        };

    }

    public function adsDelete($id){


        $ads=DB::table('ads')->where('id',$id)->first();
        unlink($ads->ads);
        DB::table('ads')->where('id',$id)->delete();
           $notification=array(
               'messege'=>'Successfully Delete',
               'alert-type'=>'success'
                );
   return Redirect()->back()->with($notification);
       }
   
  
       public function adsEdit($id){

        $ads=DB::table('ads')->where('id',$id)->first();
        return view('admin.ads.ads_edit',compact('ads'));
    }



    public function adsUpdate(Request $request , $id){

        // $validated = $request->validate([
        //     'cat_id' => 'required',
        //     'dist_id' => 'required'
        // ]);
     
        $data=array();
        $data['link']=$request->link;
        $data['type']=$request->type;

     
        $oldFirstImages=$request->oldFirstImages;


    $image=$request->ads;
    if ($image) {
         $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
        Image::make($image)->resize(500,310)->save('public/admin/ads_photo/'.$image_one);   
         $data['image_first']='public/admin/ads_photo/'.$image_one;  
         DB::table('ads')->where('id',$id)->update($data);
         unlink($oldFirstImages);
   $notification=array(
       'messege'=>'Successfully Update Post',
       'alert-type'=>'success'
        );
 return Redirect()->route('all.ads')->with($notification);
        } 
    }



}
