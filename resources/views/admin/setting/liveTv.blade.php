@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">LiveTv Setting</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">liveTv</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header col-md-6 ">
      <h3 class="card-title">LiveTv</h3>
@if ($live->status==1)
<a href="{{route('deactive.liveTv',$live->id)}}" style="float: right" class="btn btn-danger">Deactive</a>
@else
<a href="{{route('active.liveTv',$live->id)}}" style="float: right" class="btn btn-success">Active</a>
@endif
 
    </div>
  

    <div class="modal-body col-md-6 " >
            
        <form  action="{{route('update.liveTv',$live->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Embed Code</label>
              <textarea  rows="12" cols="50" type="text" class="form-control " value="" id="" name="embed_code" aria-describedby="">   
            
                {{$live->embed_code}}
            </textarea> 
            @if ($live->status==1)
            <small class="text-sussess">Now Live Tv is Active </small>   
            @else
            <small class="text-danger">Now Live Tv is Deactive </small>  
            @endif    
            </div>
         
              


             
            
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection