@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Photo</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Photo</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Photo</h3>
      <button class="btn btn-danger btn-sm"  style="float: right" data-toggle="modal"  data-target="#modal-default">Add New</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
        
          <th>Photo Title</th>
          <th>Photo</th>
          <th>Photo Type</th>
          <th>Action</th>
        
        </tr>
        </thead>
        <tbody>

            @foreach ($photo  as $row )
                
  
        <tr class="text-canter">
         
          <td>{{$row->photo_title}}</td>
          <td> <img src="{{asset($row->photo)}}" style="height: 70px; width:100px; " > </td>
          <td>
            {{-- {{$row->photo_type}} --}}
            @if ($row->photo_type==0)
            <samp class="badge badge-success" >Big Photo</samp>
            @else
            <samp class="badge badge-info" >smail Photo</samp>           
            @endif
          
          </td>
       
          <td>
{{-- <a href="{{URL::to('edit.category'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a> --}}
<a href="{{route('edit.photo',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
<a href="{{route('delete.photo',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a> 

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
              <h4 class="modal-title">Inset new Photo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                {{-- <form action="{{URL::to('/store/photo')}}" method="post" enctype="multipart/form-data"> --}}
                  <form action="{{route('store.photo')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Photo</label>
                      <input type="file" class="form-control @error('photo') is-invalid @enderror " id="" name="photo" aria-describedby="">
                      @error('photo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    
                     <div class="mb-3">
                        <label for="" class="form-label">Photo Title</label>
                        <input type="text" class="form-control " id="" name="photo_title" aria-describedby="">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Photo Type</label>
                        <select  class="form-control"  name="photo_type"  >
                            <option value="0"   >Big Photo</option>   
                            <option value="1" >Smaill Photo</option> 
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
  @endsection