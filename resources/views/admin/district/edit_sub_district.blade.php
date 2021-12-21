@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sub District</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Sub District</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  Sub District</h3>
    
    </div>
  

    <div class="modal-body col-md-6 text-center" >
            
        <form  action="{{route('update.subdistrict',$subdistrict->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Category Name Bangla</label>
              <input type="text" class="form-control " value="{{$subdistrict->subdistrict_bn}}" id="" name="subdistrict_bn" aria-describedby="">              
            </div>
            
             <div class="mb-3">
                <label for="" class="form-label">Category Name English</label>
                <input type="text" class="form-control " value="{{$subdistrict->subdistrict_en}}" id="" name="subdistrict_en" aria-describedby="">
            </div>
            

            <div class="mb-3">
              <label for="" class="form-label">Category </label>
             <select  class="form-control"  name="district_id"  required>
             <option value="" disabled="" selected="">==Choose One==</option>
            @foreach ($district as $row )
            <option value="{{$row->id}}" <?php if($row->id==$subdistrict->district_id) echo "selected"  ?> > {{$row->district_bn}} || {{$row->district_en}}</option>
            @endforeach
          </select>
          </div>

            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection