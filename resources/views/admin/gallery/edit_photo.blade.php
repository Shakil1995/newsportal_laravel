@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gallery Photo</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Gallery Photo</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update Gallery Photo</h3>
    
    </div>
  

    <div class="modal-body col-md-6 " >
            
        <form  action="{{route('update.photo',$photo->id)}}" method="post">
            @csrf
            {{-- <div class="mb-3">
              <label for="" class="form-label">Photo</label>
              <input type="text" class="form-control " value="{{$photo->photo}}" id="" name="photo" aria-describedby="">              
            </div> --}}
            
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="">Choose First Image</label>
                  <input type="file" class="" id="" name="photo">
                  </div>
                  <div class="form-group col-md-6">
                      <label for=""> First Old Image</label>
          <img src="{{URL::to($photo->photo)}}" alt="" style="height: 50px" width="70px">
          <input type="hidden" name="oldImages" value="{{$photo->photo}}">
                  </div>
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Photo Title</label>
                <input type="text" class="form-control " value="{{$photo->photo_title}}" id="" name="photo_title" aria-describedby="">
            </div>

            <div class="form-group mb-6">
                <label for="exampleInputEmail1">photo type</label>
         <select name="photo_type"   class="form-control">
      <option selected="" disabled="" >==Choose One==</option>
      {{-- @foreach ( $photo as $row) --}}
      {{-- <option  value="{{$row->id}}">{{$row->photo_type}} </option> --}}
      {{-- @endforeach --}}
       </select>
              </div>


            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection