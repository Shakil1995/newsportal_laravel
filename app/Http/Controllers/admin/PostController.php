<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Auth;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addPostIndex(){
  
        $category=DB::table('categories')->get();
        $district=DB::table('districts')->get();
     return view('admin.post.add_post',compact('category','district'));

     }
     public function allPostIndex(){
// $post=DB::table('posts')
// ->join('categories','posts.cat_id','categories.id')
// ->join( 'subcategories','posts.subcat_id','subcategories.id')
// ->join( 'districts','posts.dist_id','districts.id')
// ->join( 'subdistricts','posts.subdist_id','subdistricts.id')
// ->get();

$post=DB::table('posts')
->join('categories','posts.cat_id','categories.id')
->join( 'subcategories','posts.subcat_id','subcategories.id')
->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
->orderBy('id','DESC')
->get();

//   return response()->json($post);
        return view('admin.post.all_post',compact('post'));
     }


    //  Category to SubCategory find using ajax
     public function getSubCat($cat_id){ 
         $subCat=DB::table('subcategories')->where('category_id',$cat_id)->get();
        return response()->json($subCat);
        // return $cat_id;

     }
    //  District to SubDistrict find using ajax
     public function getSubdist($dist_id){
        $subDist=DB::table('subdistricts')->where('district_id',$dist_id)->get();
        return response()->json($subDist); 
     }


 //  District to SubDistrict find using ajax
 public function storePost(Request $request){

    $validated = $request->validate([
        'cat_id' => 'required',
      //   'dist_id' => 'required',
      //   'image_first' => 'required',
    ]);

    $data=array();
    $data['cat_id']=$request->cat_id;
    $data['subcat_id']=$request->subcat_id;
    $data['dist_id']=$request->dist_id;
    $data['user_id']= Auth::id();
    $data['subdist_id']=$request->subdist_id;
    $data['cat_id']=$request->cat_id;
   //  $data['user_id']=$request->user_id;
   // $data['title_slug_bn']=Str::slug($request->title_bn,'-');
   // $data['title_slug_en']=Str::slug($request->title_en,'-');
    $data['title_bn']=$request->title_bn;
    $data['title_en']=$request->title_en;
  
    $data['image_second']=$request->image_second;
    $data['image_third']=$request->image_third;
    $data['details_bn']=$request->details_bn;
    $data['details_en']=$request->details_en;
    $data['tags_bn']=$request->tags_bn;
    $data['tags_en']=$request->tags_en;
    $data['headline']=$request->headline;
    $data['first_section']=$request->first_section;
    $data['first_section_thumbnail']=$request->first_section_thumbnail;
    $data['big_thumbnail']=$request->big_thumbnail;
    $data['post_date']=date('d-m-y');
    $data['post_month']=date('F');

 $image_first=$request->image_first;
    if ($image_first) {
         $image_one= uniqid().'.'.$image_first->getClientOriginalExtension();    //123123.jpg
        Image::make($image_first)->resize(500,310)->save('public/admin/postImages/'.$image_one);   
         $data['image_first']='public/admin/postImages/'.$image_one;  
        } 

         $image_second=$request->image_second;
         if ($image_second) {
              $image_two= uniqid().'.'.$image_second->getClientOriginalExtension();    //123123.jpg
             Image::make($image_second)->resize(500,310)->save('public/admin/postImages/'.$image_two);   
              $data['image_second']='public/admin/postImages/'.$image_two;   

            } 
              $image_third=$request->image_third;
              if ($image_third) {
                   $image_three= uniqid().'.'.$image_third->getClientOriginalExtension();    //123123.jpg
                  Image::make($image_third)->resize(500,310)->save('public/admin/postImages/'.$image_three);    
                   $data['image_third']='public/admin/postImages/'.$image_three; 
                } 

          DB::table('posts') ->insert($data);
    $notification=array(
        'messege'=>'Successfully Added Post',
        'alert-type'=>'success'
         );
return Redirect()->route('all_posts')->with($notification);


 }
 public function deletePost($id){

    $post=DB::table('posts')->where('id',$id)->first();
    unlink($post->image_first);
    DB::table('posts')->where('id',$id)->delete();

       $notification=array(
           'messege'=>'Successfully Post Delete',
           'alert-type'=>'success'
            );
return Redirect()->back()->with($notification);
   }

public function editPost($id){
   $post=DB::table('posts')->where('id',$id)->first();
   $category=DB::table('categories')->get();
   $district=DB::table('districts')->get();

   return view('admin.post.edit_add_post',compact('post','category','district'));


   
}

public function updatePost(Request $request , $id){

   $validated = $request->validate([
       'cat_id' => 'required',
       'dist_id' => 'required'
   ]);

   $data=array();
   $data['cat_id']=$request->cat_id;
   $data['subcat_id']=$request->subcat_id;
   $data['dist_id']=$request->dist_id;
   $data['subdist_id']=$request->subdist_id;
   $data['cat_id']=$request->cat_id;
  //  $data['user_id']=$request->user_id;
   $data['title_bn']=$request->title_bn;
   $data['title_en']=$request->title_en;
 
   $data['image_second']=$request->image_second;
   $data['image_third']=$request->image_third;
   $data['details_bn']=$request->details_bn;
   $data['details_en']=$request->details_en;
   $data['tags_bn']=$request->tags_bn;
   $data['tags_en']=$request->tags_en;
   $data['headline']=$request->headline;
   $data['first_section']=$request->first_section;
   $data['first_section_thumbnail']=$request->first_section_thumbnail;
   $data['big_thumbnail']=$request->big_thumbnail;

   $oldFirstImages=$request->oldFirstImages;

$image_first=$request->image_first;
   if ($image_first) {
        $image_one= uniqid().'.'.$image_first->getClientOriginalExtension();    //123123.jpg
       Image::make($image_first)->resize(500,310)->save('public/admin/postImages/'.$image_one);   
        $data['image_first']='public/admin/postImages/'.$image_one;  
        DB::table('posts')->where('id',$id)->update($data);
        unlink($oldFirstImages);
  $notification=array(
      'messege'=>'Successfully Update Post',
      'alert-type'=>'success'
       );
return Redirect()->route('all_posts')->with($notification);
       } 
       $data['image_first']=$oldFirstImages;
       DB::table('posts')->where('id',$id)->update($data);
      //  unlink($oldFirstImages);
 $notification=array(
     'messege'=>'Successfully Update Post',
     'alert-type'=>'success'
      );
      return Redirect()->route('all_posts')->with($notification);
       } 

      //   $image_second=$request->image_second;
      //   if ($image_second) {
      //        $image_two= uniqid().'.'.$image_second->getClientOriginalExtension();    //123123.jpg
      //       Image::make($image_second)->resize(500,310)->save('public/admin/postImages/'.$image_two);   
      //        $data['image_second']='public/admin/postImages/'.$image_two;   

      //      } 
      //        $image_third=$request->image_third;
      //        if ($image_third) {
      //             $image_three= uniqid().'.'.$image_third->getClientOriginalExtension();    //123123.jpg
      //            Image::make($image_third)->resize(500,310)->save('public/admin/postImages/'.$image_three);    
      //             $data['image_third']='public/admin/postImages/'.$image_three; 
      //          } 


// }



}


