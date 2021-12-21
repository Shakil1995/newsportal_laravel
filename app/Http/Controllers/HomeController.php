<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

public function logout(){
    Auth::logout();
    return redirect()->to('/admin');
}

public function WriterIndex(){
    $user=DB::table('users')->where('type',0)->get();
    return view('admin.role.add_writer',compact('user'));
}



public function store(Request $request){
    $validated = $request->validate([
        'email' => 'required',
        
    ]);

    $data=array();
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['password']=Hash::make($request->password) ;
    $data['categorie']=$request->categorie;
    $data['districts']=$request->districts;
    $data['setting']=$request->setting;
    $data['gallery']=$request->gallery;
    $data['post']=$request->post;
    $data['user_role']=$request->user_role;
    $data['type']=0;
   DB::table('users')->insert($data);
  
    $notification=array(
        'messege'=>'Successfully User  Added',
        'alert-type'=>'success'
         );
return Redirect()->back()->with($notification);
// return response()->json($data);
}


public function editUser($id){

    $user=DB::table('users')->where('id',$id)->first();
    return view('admin.role.edit_add_writer',compact('user'));
}



public function writerUpdate(Request $request , $id){
    // $validated = $request->validate([
    //     'category_bn' => 'required|max:55',
    //     'category_en' => 'required|max:55',
    // ]);

    $data=array();
    $data['name']=$request->name;
    $data['categorie']=$request->categorie;
    $data['districts']=$request->districts;
    $data['post']=$request->post;
    $data['setting']=$request->setting;
    $data['gallery']=$request->gallery;
    $data['post']=$request->post;
    $data['ads']=$request->ads;
    $data['user_role']=$request->user_role;
    
    DB::table('users')->where('id',$id)->update($data);
  
    $notification=array(
        'messege'=>'Successfully User  Update',
        'alert-type'=>'success'
         );
         return Redirect()->route('add.writer')->with($notification);

}

public function writerDelete($id){

    DB::table('users')->where('id',$id)->delete();

       $notification=array(
           'messege'=>'Successfully Delete',
           'alert-type'=>'success'
            );
return Redirect()->back()->with($notification);
   }

}


