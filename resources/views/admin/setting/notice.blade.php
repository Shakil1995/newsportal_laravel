@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Notice Setting</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Notice</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header col-md-6 ">
      <h3 class="card-title">Notice</h3>
@if ($notice->status==1)
<a href="{{route('deactive.notice',$notice->id)}}" style="float: right" class="btn btn-danger">Deactive</a>
@else
<a href="{{route('active.notice',$notice->id)}}" style="float: right" class="btn btn-success">Active</a>
@endif
 
    </div>
  

    <div class="modal-body col-md-6 " >
            
        <form  action="{{route('update.notice',$notice->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Notices </label>
              <textarea  rows="12" cols="50" type="text" class="form-control " value="" id="" name="notice" aria-describedby="">   
            
                {{$notice->notice}}
            </textarea> 
            @if ($notice->status==1)
            <small class="text-success">Now Notices  Active in Your Website  </small>   
            @else
            <small class="text-danger">Now Notices Deactive in Your Website  </small>  
            @endif    
            </div>
         
              


             
            
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection