<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;

class ExtraController extends Controller
{
    public function langBangla(){
        Session::get('lang');
        session()->forget('lang');
        Session()->put('lang','bangla');
        return redirect()->back();
    }
    public function langEnglish(){
        Session::get('lang');
        session()->forget('lang');
        Session()->put('lang','english');
        return redirect()->back(); 
    }

    public function singlePagePost($id,$slug){

        $post=DB::table('posts')
->join('categories','posts.cat_id','categories.id')
->join( 'subcategories','posts.subcat_id','subcategories.id')
->join('users','posts.user_id','users.id')
->select('posts.*','users.name','categories.category_bn','categories.category_en','subcategories.subcategory_bn','subcategories.subcategory_en')
->where('posts.id',$id)
->first();

//   return response()->json($post);
        return view('frontend.single_post',compact('post'));
     }

     public function allPost($id,$subcategory_bn){
        $post=DB::table('posts')->where('subcat_id',$id)->orderBY('id','DESC')->paginate(15);
        return view('frontend.all_post',compact('post'));
     }
     
     public function allCatPost($id,$category_bn){
        $post=DB::table('posts')->where('cat_id',$id)->orderBY('id','DESC')->paginate(15);
        return view('frontend.all_post',compact('post'));
     }

     public function getSubDist($dist_id){
         $sub=DB::table('subdistricts')->where('district_id',$dist_id)->get();
         return response()->json($sub);

     }

     public function sharadesh(Request $request){
$distid=$request->dist_id;
$subdistid=$request->subdist_id;

// echo "$distid";
// echo "$subdistid";
$post=DB::table('posts')->where('dist_id',$distid)->where('subdist_id',$subdistid)->orderBy('id','DESC')->paginate(15);
return view('frontend.all_post',compact('post'));
     }

    
}
