@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ads</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Ads</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">update  Ads</h3>
    
    </div>
  

    <div class="modal-body col-md-6 " >
            
        <form  action="{{route('update.ads',$ads->id)}}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Ads Link</label>
              <input type="text" class="form-control " value="{{$ads->link}}" id="" name="ads" aria-describedby="">              
            </div>
            
             <div class="mb-3">
                <label for="" class="form-label">ads Type </label>
                {{-- <select name="type" id="type"  class="form-control">
                    <option selected="" disabled="" >==Choose One==</option>
                   @foreach ( $ads as $row) }}
                    <option value="{{$row->type}}" 
                        <?php if ($row->id == $row->type) {
                            echo "selected";
                         }?>
                        
                        >@if ($row->type==2)
                        horizontal @else
                            vertical 
                        @endif </option>
                    @endforeach
                     </select> --}}
                     <select name="type" id="type"  class="form-control">
                        <option selected="" disabled="" >==Choose One==</option>
                        <option value="" 
                        
                        <?php if ($ads->type) {
                            echo "selected";
                         }?>
                        > @if ($ads->type==2)
                        horizontal @else
                            vertical 
                        @endif</option>
                        <option value="2">Horizontal</option>
                        <option value="1">Vertical</option>

                         </select>
            </div>



            <div class="row">
                <div class="form-group col-md-6">
                  <label for="">Choose First Image</label>
                  <input type="file" class="" id="" name="ads">
                  </div>
                  <div class="form-group col-md-6">
                      <label for=""> First Old Image</label>
          <img src="{{URL::to($ads->ads)}}" alt="" style="height: 50px" width="70px">
          <input type="hidden" name="oldFirstImages" value="{{$ads->ads}}">
                  </div>
              </div>
          

            <button type="submit" class="btn btn-primary btn-block">Update</button>
          </form>

    </div>
  @endsection