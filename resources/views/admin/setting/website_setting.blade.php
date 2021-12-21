@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Website Setting</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Website</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  Website</h3>
    
    </div>
  

    <div class="modal-body col-md-6 " >
            
        {{-- <form  action="" method="post"> --}}
          <form  action="{{route('update.setting',$setting->id)}}" method="post"   enctype="multipart/form-data" > 
            @csrf
        
            {{-- <div class="row">
                <div class="form-group col-md-6">
                  <label for="">Choose First Image</label>
                  <input type="file" class="" id="" name="site_logo">
                  </div>
                  <div class="form-group col-md-6">
                      <label for=""> First Old Image</label>
          <img src="{{URL::to($setting->site_logo)}}" alt="" style="height: 50px" width="70px">
          <input type="hidden" name="oldFirstImages" value="{{$setting->site_logo}}">
                  </div>
              </div> --}}


            <div class="mb-3">
                <label for="" class="form-label">Site Name Bangla</label>
                <input type="text" class="form-control " value="{{$setting->site_name_bn}}" id="" name="site_name_bn" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Site Name English</label>
                <input type="text" class="form-control " value="{{$setting->site_name_en}}" id="" name="site_name_en" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Site Phone bangla</label>
                <input type="text" class="form-control " value="{{$setting->site_phone_bn}}" id="" name="site_phone_bn" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Site Phone English</label>
                <input type="text" class="form-control " value="{{$setting->site_phone_en}}" id="" name="site_phone_en" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control " value="{{$setting->site_email}}" id="" name="site_email" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Site Address bangla</label>
                <textarea  id="summernote" name="site_address_bn"   >
                    {!!$setting->site_address_bn!!}
                  </textarea>           
              </div>
              {{-- <div class="mb-3">
                <label for="" class="form-label">Site Adress English</label>
                <textarea  id="summernote" name="site_address_en"   >
                    {{$setting->site_address_en}}
                  </textarea>              
              </div> --}}
              <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Site Address  English</label>
                <textarea class="textarea" id="summernote" name="site_address_en" value="" >
                  {!!$setting->site_address_en!!}
                </textarea>
              </div>

            
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection