@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Categories</h1>
         
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
            
        <form  action="{{route('update.category',$category->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Category Name Bangla</label>
              <input type="text" class="form-control " value="{{$category->category_bn}}" id="" name="category_bn" aria-describedby="">              
            </div>
            
             <div class="mb-3">
                <label for="" class="form-label">Category Name English</label>
                <input type="text" class="form-control " value="{{$category->category_en}}" id="" name="category_en" aria-describedby="">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection