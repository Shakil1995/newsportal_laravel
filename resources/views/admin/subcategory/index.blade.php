@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Subcategories</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active"> Subcategories</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Subcategories</h3>
      <button class="btn btn-danger btn-sm"  style="float: right" data-toggle="modal"  data-target="#modal-default">Add New</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Category </th>
          <th>Subcategory name Bangla</th>
          <th>Subcategory name English</th>
          <th>Action</th>
        
        </tr>
        </thead>
        <tbody>
           @foreach ($subcategory  as $row )
        <tr>
            <td>{{$row->category_bn}} ||{{$row->category_en}}</td>
          <td>{{$row->subcategory_bn}}</td>
          <td>{{$row->subcategory_en}}</td>
          <td>
            <a href="{{route('edit.subcategory',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
{{-- <a href="{{route('edit.subcategory',$row->id)}}" class="btn btn-info"   > <i class="fa fa-edit"></i></a> --}}
<a href="{{route('delete.subcategory',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>

         </td>
                 </tr>
        @endforeach
      </tfoot>
      </table>
    </div>


    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Inset new Subategory</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <form action="{{route('store.subcategory')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">SubCategory Name Bangla</label>
                      <input type="text" class="form-control  "   name="subcategory_bn" aria-describedby="">
                      
                    </div>
                    
                     <div class="mb-3">
                        <label for="" class="form-label">SubCategory Name English</label>
                        <input type="text" class="form-control @error('subcategory_en') is-invalid @enderror" id="" name="subcategory_en" aria-describedby="">
                        @error('subcategory_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Category </label>
                       <select  class="form-control"  name="category_id"  required>
                       <option value="" disabled="" selected="">==Choose One==</option>
                      @foreach ($category as $row )
                      <option value="{{$row->id}}"> {{$row->category_en}} || {{$row->category_bn}}</option>
                      @endforeach
                    </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </form>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




{{-- 
      <div class="modal fade" id="editModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Subategory</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">SubCategory Name Bangla</label>
                      <input type="text" class="form-control  " value="{{$subcategory->subcategory_bn}}" name="subcategory_bn"   aria-describedby="">
                     
                    </div>
                    
                     <div class="mb-3">
                        <label for="" class="form-label">SubCategory Name English</label>
                        <input type="text" class="form-control "   name="subcategory_en" aria-describedby="">
                      
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Category </label>
                       <select  class="form-control"  name="category_id"  required>
                       <option value="" disabled="" selected="">==Choose One==</option>
                      @foreach ($category as $row )
                      <option value="{{$row->id}}"> {{$row->category_en}} || {{$row->category_bn}}</option>
                      @endforeach
                    </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </form>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal --> --}}

  @endsection