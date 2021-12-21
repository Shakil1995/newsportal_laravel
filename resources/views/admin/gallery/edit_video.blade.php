@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Gallery Video</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Gallery Video</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update Gallery Video</h3>
    
    </div>
  

    <div class="modal-body col-md-6 " >
            
        <form  action="{{route('update.video',$video->id)}}" method="post">
            @csrf
            {{-- <div class="mb-3">
              <label for="" class="form-label">Photo</label>
              <input type="text" class="form-control " value="{{$photo->photo}}" id="" name="photo" aria-describedby="">              
            </div> --}}
            
     
                <div class="mb-3">
                  <label class="form-label" for="">Video embed code</label>
                  <input type="texy" class="form-control" id="" value="{{$video->video}}" name="video">
                  </div>
        
          

              <div class="mb-3">
                <label for="" class="form-label">video Title</label>
                <input type="text" class="form-control " value="{{$video->video_title}}" id="" name="video_title" aria-describedby="">
            </div>

            <div class="form-group mb-6">
                <label for="exampleInputEmail1">video type</label>
         <select name="video_type"   class="form-control">
      <option selected="" disabled="" >==Choose One==</option>
      {{-- @foreach ( $video as $row) --}}
      {{-- <option  value="{{$row->id}}">{{$row->video_type}} </option> --}}
      {{-- @endforeach --}}
       </select>
              </div>


            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection