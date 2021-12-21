@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Videos</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Videos</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Video</h3>
      <button class="btn btn-danger btn-sm"  style="float: right" data-toggle="modal"  data-target="#modal-default">Add New</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped text-center">
        <thead>
        <tr>
        
          <th>Video Title</th>
          <th>video Type</th>
          <th>Action</th>
        
        </tr>
        </thead>
        <tbody>

            @foreach ($video  as $row )
                
  
        <tr class="text-canter">        
          <td>{{$row->video_title}}</td>
          <td>
            @if ($row->video_type==1)
            <samp class="badge badge-success" >Big video</samp>
            @else
            <samp class="badge badge-info" >smail video</samp>           
            @endif
        </td>
       
          <td>
{{-- <a href="{{URL::to('edit.category'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a> --}}
<a href="{{route('edit.video',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
<a href="{{route('delete.video',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a>  

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
              <h4 class="modal-title">Inset new video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <form action="{{route('store.video')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">video Embed</label>
                      <input type="text" class="form-control @error('video') is-invalid @enderror " id="" name="video" aria-describedby="">
                      @error('video')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    
                     <div class="mb-3">
                        <label for="" class="form-label">video Title</label>
                        <input type="text" class="form-control " id="" name="video_title" aria-describedby="">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">video Type</label>
                        <select  class="form-control"  name="video_type"  >                        
                            <option value="0" >Smaill Video</option> 
                            <option value="1" >Big video</option>  
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