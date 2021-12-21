@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Prayer Setting</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Prayer Time</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  Prayer Time</h3>
    
    </div>
  

    <div class="modal-body col-md-6  align-items-center  " >
            
        <form  action="{{route('update.prayer',$prayer->id)}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Fajr</label>
              <input type="text" class="form-control " value="{{$prayer->fajr}}" id="" name="fajr" aria-describedby="">              
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Dhuhr</label>
                <input type="text" class="form-control " value="{{$prayer->dhuhr}}" id="" name="dhuhr" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Asr</label>
                <input type="text" class="form-control " value="{{$prayer->asr}}" id="" name="asr" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Maghrib</label>
                <input type="text" class="form-control " value="{{$prayer->maghrib}}" id="" name="maghrib" aria-describedby="">              
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Isha</label>
                <input type="text" class="form-control " value="{{$prayer->isha}}" id="" name="isha" aria-describedby="">              
              </div>
        
           
            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection