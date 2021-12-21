@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Social Setting</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Categories</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  Categories</h3>
    
    </div>
  

    <div class="modal-body col-md-6 text-center" >
            
        <form  action="{{route('update.social',$social->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Facebook</label>
              <input type="text" class="form-control " value="{{$social->facebook}}" id="" name="facebook" aria-describedby="">              
            </div>
            <div class="mb-3">
                <label for="" class="form-label">twitter</label>
                <input type="text" class="form-control " value="{{$social->twitter}}" id="" name="twitter" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">youtube</label>
                <input type="text" class="form-control " value="{{$social->youtube}}" id="" name="youtube" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">instagram</label>
                <input type="text" class="form-control " value="{{$social->instagram}}" id="" name="instagram" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">linkedin</label>
                <input type="text" class="form-control " value="{{$social->linkedin}}" id="" name="linkedin" aria-describedby="">              
              </div>

             
            
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection