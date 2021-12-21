@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">User</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">User</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  User </h3>
    
    </div>
  

    <div class="modal-body">
            
        <form action="{{route('update.user',$user->id)}}" method="post" class="col-lg-6" >
            @csrf
            <div class="form-group">
              <label for="" class="form-label">User Name </label>
              <input type="text" class="form-control " id="" name="name" value="{{$user->name}}">                   
            </div>
            
             <div class="form-group">
                <label for="" class="form-label">User Email </label>
                <input disabled type="email" class="form-control" id="" name="email" value="{{$user->email}}" >
            </div>

        
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="" class="form-label">category</label>
                    <input type="checkbox" class="form-control" id="" name="categorie" value="1"  @if($user->categorie==1) checked="" @endif >
                </div>
                <div class="form-group col-lg-3">
                    <label for="" class="form-label">Districts</label>
                    <input type="checkbox" class="form-control" id="" name="districts" value="1"  @if($user->districts==1) checked="" @endif   >
                </div>
                <div class="form-group col-lg-3">
                    <label for="" class="form-label">setting</label>
                    <input type="checkbox" class="form-control" id="" name="setting"  value="1"  @if($user->setting==1) checked="" @endif >
                </div>
                <div class="form-group col-lg-3">
                    <label for="" class="form-label">post</label>
                    <input type="checkbox" class="form-control" id="" name="post" value="1"  @if($user->post==1) checked="" @endif  >
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="" class="form-label">gallery</label>
                    <input type="checkbox" class="form-control" id="" name="gallery" value="1"   @if($user->gallery==1) checked="" @endif >
                </div>
                <div class="form-group col-lg-3">
                    <label for="" class="form-label">ads</label>
                    <input type="checkbox" class="form-control" id="" name="ads"  value="1" @if($user->ads==1) checked="" @endif  >
                </div> 
                <div class="form-group col-lg-3">
                    <label for="" class="form-label">Role</label>
                    <input disabled type="checkbox" class="form-control" id="" name="user_role" value="1"  @if($user->user_role==1) checked="" @endif  >
                </div>     
                {{-- <div class="form-group col-lg-3">
                    <label for="" class="form-label">type</label>
                    <input type="checkbox" class="form-control" id="" name="type "  >
                </div>              
                              --}}
               
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>

  @endsection