@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Seo Setting</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">SEO</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  SEO</h3>
    
    </div>
  

    <div class="modal-body col-md-6 " >
            
        <form  action="{{route('update.seo',$seo->id)}}" method="post">
          {{-- <form  action="{{route('update.prayer',$prayer->id)}}" method="post"> --}}
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Meta Author</label>
              <input type="text" class="form-control " value="{{$seo->meta_author}}" id="" name="meta_author" aria-describedby="">              
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Meta Title</label>
                <input type="text" class="form-control " value="{{$seo->meta_title}}" id="" name="meta_title" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Meta Keyword</label>
                <input type="text" class="form-control " value="{{$seo->meta_keyword}}" id="" name="meta_keyword" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Google Analytics</label>
                <input type="text" class="form-control " value="{{$seo->google_analytics}}" id="" name="google_analytics" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Google Verification</label>
                <input type="text" class="form-control " value="{{$seo->google_verification}}" id="" name="google_verification" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Alexa Analytics</label>
                <input type="text" class="form-control " value="{{$seo->alexa_analytics}}" id="" name="alexa_analytics" aria-describedby="">              
              </div>


             
            
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection