<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function photoIndex(){
        $photo=DB::table('photos')->get();
        // dd($photo);
        return view('admin.gallery.photos',compact('photo'));
     }

   
 //  District to SubDistrict find using ajax
 public function storePhoto(Request $request){

    $validated = $request->validate([
        'photo' => 'required',
    ]);

    $data=array();
    $data['photo_title']=$request->photo_title;
    $data['photo_type']=$request->photo_type;
    // dd($data);
 $image=$request->photo;
    if ($image) {
         $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
        Image::make($image)->resize(500,310)->save('public/admin/photo_gallery/'.$image_one);   
         $data['photo']='public/admin/photo_gallery/'.$image_one;  
        } 
          DB::table('photos') ->insert($data);
    $notification=array(
        'messege'=>'Successfully Photo Added',
        'alert-type'=>'success'
         );
return Redirect()->route('photos')->with($notification);


 }


 public function deletePhoto($id){

    $photo=DB::table('photos')->where('id',$id)->first();
    unlink($photo->photo);
    // unlink($post->image_first);
    DB::table('photos')->where('id',$id)->delete();

       $notification=array(
           'messege'=>'Successfully Photo Delete',
           'alert-type'=>'success'
            );
return Redirect()->back()->with($notification);
   }
   

   public function photoEdit($id){

      $photo=DB::table('photos')->where('id',$id)->first();
    // dd($photo);
    return view('admin.gallery.edit_photo',compact('photo'));
 }

 public function photoUpdate(Request $request , $id){

    // $validated = $request->validate([
    //     'photo' => 'required',
    // ]);
 
    $data=array();
    $data['photo_title']=$request->photo_title; 
//     $oldImages=$request->oldImages;
 
//  $image=$request->photo;

//     if ($image) {
//          $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
//         Image::make($image)->resize(500,310)->save('public/admin/photo_gallery/'.$image_one);   
//          $data['photo']='public/admin/photo_gallery/'.$image_one; 
//          dd($data); 
//          DB::table('photos')->where('id',$id)->update($data);
//          unlink($oldImages);
//    $notification=array(
//        'messege'=>'Successfully Update Photo',
//        'alert-type'=>'success'
//         );
 
//        return Redirect()->route('photos')->with($notification);
//         } 


   //  } 



    $oldImages=$request->oldImages;

    $photo=$request->photo;
       if ($photo) {
            $image_one= uniqid().'.'.$photo->getClientOriginalExtension();    //123123.jpg
           Image::make($photo)->resize(500,310)->save('public/admin/photo_gallery/'.$image_one);   
            $data['photo']='public/admin/photo_gallery/'.$image_one;  
            DB::table('photos')->where('id',$id)->update($data);
            unlink($oldImages);
      $notification=array(
          'messege'=>'Successfully Update Post',
          'alert-type'=>'success'
           );
    return Redirect()->route('photos')->with($notification);
           } 
           $data['photo']=$oldImages;
           DB::table('photos')->where('id',$id)->update($data);
          //  unlink($oldFirstImages);
     $notification=array(
         'messege'=>'Successfully Update Post',
         'alert-type'=>'success'
          );
          return Redirect()->route('photos')->with($notification);
           } 

   

// Video Section


public function videosIndex(){
   $video=DB::table('videos')->get();
   return view('admin.gallery.videos',compact('video'));
}


 public function storeVideo(Request $request){

   $validated = $request->validate([
       'video' => 'required',
   ]);

   $data=array();
   $data['video']=$request->video;
   $data['video_title']=$request->video_title;
   $data['video_type']=$request->video_type;

         DB::table('videos') ->insert($data);
   $notification=array(
       'messege'=>'Successfully Video Added',
       'alert-type'=>'success'
        );
return Redirect()->route('videos')->with($notification);


}


public function deleteVideo($id){

   DB::table('videos')->where('id',$id)->delete();

      $notification=array(
          'messege'=>'Successfully Photo Delete',
          'alert-type'=>'success'
           );
return Redirect()->back()->with($notification);
  }
  
  public function videoEdit($id){

   $video=DB::table('videos')->where('id',$id)->first();
 // dd($photo);
 return view('admin.gallery.edit_video',compact('video'));
}

public function videoUpdate(Request $request , $id){
   $validated = $request->validate([
       'video' => 'max:455',
       'video_title' => 'max:455',
   ]);

   $data=array();
   $data['video']=$request->video;
   $data['video_title']=$request->video_title;
   $data['video_type']=$request->video_type;
   DB::table('videos')->where('id',$id)->update($data);
 
   $notification=array(
       'messege'=>'Successfully Video Update',
       'alert-type'=>'success'
        );
        return Redirect()->route('videos')->with($notification);

}


}
