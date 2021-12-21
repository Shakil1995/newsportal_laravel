@extends('layouts.app')
@section('content')
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">All  Post</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">All Post</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <div class="card-header">
    {{-- <button   class="btn btn-danger btn-sm"  style="float: left" > <a href="">Add New</a></button> --}}
    
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table text-center table-bordered table-striped">
      <thead>
      <tr>
          <th>Category </th>
        <th>Subcategory</th>
        <th>Title</th>
        <th>Image</th>
        <th>Date</th>
        <th>Action</th>
      
      </tr>
      </thead>
      <tbody>
         @foreach ($post  as $row )
      <tr>
          <td>{{$row->category_bn}} </td>
        <td>{{$row->subcategory_bn}}</td>
        <td>{{$row->title_bn}}</td>
        <td> <img src="{{URL::to($row->image_first)}}"  style="height: 50px; width:80px; " alt=""> </td>
        <td>{{$row->post_date}}</td>
        <td>
          <a href="{{route('edit.post',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
{{-- <a href="{{route('edit.subcategory',$row->id)}}" class="btn btn-info"   > <i class="fa fa-edit"></i></a> --}}
<a href="{{route('delete.allpost',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>

       </td>
               </tr>
      @endforeach
    </tfoot>
    </table>
  </div>





@endsection