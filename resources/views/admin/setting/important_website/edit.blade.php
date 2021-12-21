@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Importent </h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Importent Website </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  Importent Website </h3>
    
    </div>
  

    <div class="modal-body col-md-6 " >
            
        <form  action="{{route('update.important_website',$website->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Website Name Bangla</label>
              <input type="text" class="form-control " value="{{$website->websiteName_bn}}" id="" name="websiteName_bn" aria-describedby="">              
            </div>
            
             <div class="mb-3">
                <label for="" class="form-label">Website  Name English</label>
                <input type="text" class="form-control " value="{{$website->websiteName_en}}" id="" name="websiteName_en" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Website Link</label>
                <input type="text" class="form-control " value="{{$website->websiteName_link}}" id="" name="websiteName_link" aria-describedby="">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection