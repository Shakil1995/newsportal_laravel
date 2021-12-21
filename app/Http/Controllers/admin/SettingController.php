<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

// Social Section Controller 
    public function socialIndex(){
        $social=DB::table('socials')->first();
        return view('admin.setting.social',compact('social'));
     }
   


     public function socialUpdate(Request $request , $id){
        $validated = $request->validate([
            'facebook' => 'max:555',
            'twitter' => 'max:555',
        ]);
   
        $data=array();
        $data['facebook']=$request->facebook;
        $data['twitter']=$request->twitter;
        $data['youtube']=$request->youtube;
        $data['instagram']=$request->instagram;
        $data['linkedin']=$request->linkedin;
       
        DB::table('socials')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);

    }

    // SEO Section Controller 
    public function seoIndex(){
        $seo=DB::table('seos')->first();
        // dd($seo);
        return view('admin.setting.seos',compact('seo'));
     }

    public function seoUpdate(Request $request , $id){
        // dd($request);
        $validated = $request->validate([
            'meta_author' => 'max:555',
            'meta_title' => 'max:555',
        ]);
   
        $data=array();
        $data['meta_author']=$request->meta_author;
        $data['meta_title']=$request->meta_title;
        $data['meta_keyword']=$request->meta_keyword;
        $data['google_analytics']=$request->google_analytics;
        $data['google_verification']=$request->google_verification;
        $data['alexa_analytics']=$request->alexa_analytics;
       
        DB::table('seos')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);

    }
 
    public function prayerIndex(){
        $prayer=DB::table('prayer')->first();
        return view('admin.setting.prayer_time',compact('prayer'));
     }



     public function prayerUpdate(Request $request , $id){
        $validated = $request->validate([
            'fajr' => 'max:555',
            'dhuhr' => 'max:555',
        ]);
   
        $data=array();
        $data['fajr']=$request->fajr;
        $data['dhuhr']=$request->dhuhr;
        $data['asr']=$request->asr;
        $data['maghrib']=$request->maghrib;
        $data['isha']=$request->isha;

       
        DB::table('prayer')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);

    }


    
    public function liveTvIndex(){
        $live=DB::table('livetv')->first();
        return view('admin.setting.liveTv',compact('live'));
     }



     public function liveTvUpdate(Request $request , $id){
        $validated = $request->validate([
            'embed_code' => 'max:555',
           
        ]);
   
        $data=array();
        $data['embed_code']=$request->embed_code;
        // $data['status']=$request->status;

       
        DB::table('livetv')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Update',
            'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);

    }

    public function activeLiveTv($id){
        $live=DB::table('livetv')->where('id',$id)->update(['status'=>1]); 
        $notification=array(
            'messege'=>'Successfully Tv  Live website ',
            'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);   
    }
    public function deActiveLiveTv($id){
        $live=DB::table('livetv')->where('id',$id)->update(['status'=>0]); 
        $notification=array(
            'messege'=>'Tv  Live Off in  website ',
            'alert-type'=>'error'
             );
   return Redirect()->back()->with($notification);   
    }

// notice section
public function noticeIndex(){
    $notice=DB::table('notices')->first();
    return view('admin.setting.notice',compact('notice'));
 }



 public function noticeUpdate(Request $request , $id){
    $validated = $request->validate([
        'notice' => 'max:555',
       
    ]);

    $data=array();
    $data['notice']=$request->notice;
    // $data['status']=$request->status;

   
    DB::table('notices')->where('id',$id)->update($data);
  
    $notification=array(
        'messege'=>'Successfully Notice Update',
        'alert-type'=>'success'
         );
return Redirect()->back()->with($notification);

}




public function activeNotice($id){
    DB::table('notices')->where('id',$id)->update(['status'=>1]); 
    $notification=array(
        'messege'=>'Notices  Live website ',
        'alert-type'=>'success'
         );
return Redirect()->back()->with($notification);   
}
public function deActiveNotice($id){
    DB::table('notices')->where('id',$id)->update(['status'=>0]); 
    $notification=array(
        'messege'=>'Notices Off in  website ',
        'alert-type'=>'error'
         );
return Redirect()->back()->with($notification);   
}



    public function index(){
        $important_website=DB::table('important_website')->get();
        return view('admin.setting.important_website.important_website',compact('important_website'));
    }


    public function store(Request $request){
        $validated = $request->validate([
            // 'websiteName_bn' => 'required|unique:important_website|max:55',
            'websiteName_link' => 'required|unique:important_website|max:55',
        ]);

        $data=array();
        $data['websiteName_bn']=$request->websiteName_bn;
        $data['websiteName_en']=$request->websiteName_en;
        $data['websiteName_link']=$request->websiteName_link;
        DB::table('important_website')->insert($data);
      
        $notification=array(
            'messege'=>'Successfully Website Added',
            'alert-type'=>'success'
             );
return Redirect()->back()->with($notification);

    }

    public function delete($id){

        DB::table('important_website')->where('id',$id)->delete();
   
           $notification=array(
               'messege'=>'Successfully Important Website Delete',
               'alert-type'=>'success'
                );
   return Redirect()->back()->with($notification);
       }

       public function ImportantWebsiteEdit($id){
            // dd($id);
        $website=DB::table('important_website')->where('id',$id)->first();
        return view('admin.setting.important_website.edit',compact('website'));
    }

    public function ImportantWebsiteUpdate(Request $request , $id){
        $validated = $request->validate([
            'websiteName_link' => 'required|max:55',
        
        ]);

        $data=array();
        $data['websiteName_bn']=$request->websiteName_bn;
        $data['websiteName_en']=$request->websiteName_en;
        $data['websiteName_link']=$request->websiteName_link;
        DB::table('important_website')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Important Website  Update',
            'alert-type'=>'success'
             );
// return Redirect('important_website.setting')->with($notification);
return Redirect()->route('important_website.setting')->with($notification);

    }


    public function websiteIndex(){
        $setting=DB::table('website_setting')->first();
        return view('admin.setting.website_setting',compact('setting'));
     }


     public function sittingUpdate(Request $request , $id){
        $validated = $request->validate([
            'site_email' => '|max:55',
        
        ]);

        $data=array();
        $data['site_name_bn']=$request->site_name_bn;
        $data['site_name_en']=$request->site_name_en;
        $data['site_address_bn']=$request->site_address_bn;
        $data['site_address_en']=$request->site_address_en;
        $data['site_phone_bn']=$request->site_phone_bn;
        $data['site_phone_en']=$request->site_phone_en;
        $data['site_email']=$request->site_email;




        // $oldFirstImages=$request->oldFirstImages;

        // $image=$request->site_logo;
        //    if ($image) {
        //         $image_one= uniqid().'.'.$image->getClientOriginalExtension();    //123123.jpg
        //        Image::make($image)->resize(500,310)->save('public/admin/site_setting/'.$image_one);   
        //         $data['site_logo']='public/admin/site_setting/'.$image_one;  
        //         DB::table('website_setting')->where('id',$id)->update($data);
        //         unlink($oldFirstImages);
        //   $notification=array(
        //       'messege'=>'Successfully Update site Setting',
        //       'alert-type'=>'success'
        //        );
        // return Redirect()->route('website_setting')->with($notification);
        //        } 
        //        $data['site_logo']=$oldFirstImages;
        //        DB::table('website_setting')->where('id',$id)->update($data);
        //       //  unlink($oldFirstImages);
        //  $notification=array(
        //      'messege'=>'Successfully Update Post',
        //      'alert-type'=>'success'
        //       );
        //       return Redirect()->route('website_setting')->with($notification);
        //        } 



        DB::table('website_setting')->where('id',$id)->update($data);
      
        $notification=array(
            'messege'=>'Successfully Important Website  Update',
            'alert-type'=>'success'
             );
// return Redirect('important_website.setting')->with($notification);
return Redirect()->route('website.setting')->with($notification);
} 



}
