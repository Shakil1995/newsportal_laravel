@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Ads </h1>
         
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
      <h3 class="card-title">All Ads</h3>
      <button class="btn btn-danger btn-sm"  style="float: right" data-toggle="modal"  data-target="#modal-default">Add New</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ads img</th>
          <th>ads name </th>         
          <th>ads Type</th>
          <th>Action</th>
        
        </tr>
        </thead>
        <tbody>

            @foreach ($ads  as $row )
                
  
        <tr>
            <td> 
                @if ($row->type==2)
                <img src="{{asset($row->ads)}}" style="height:70px; width:300px" alt=""> 
                 @else
                 <img src="{{asset($row->ads)}}" style="height:70px; width:80px" alt=""> 
                @endif
          </td>
          <td>{{$row->link}}</td>
          <td>
              {{-- {{$row->type}} --}}
            @if ($row->type==2)
            horizontal @else
                vertical 
            @endif
            </td>
          <td>
{{-- <a href="{{URL::to('edit.category'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a> --}}
<a href="{{route('edit.ads',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
<a href="{{route('delete.ads',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a> 

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
              <h4 class="modal-title">Inset new Ads</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <form action="{{route('store.ads')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Ads Link </label>
                      <input type="text" class="form-control @error('link') is-invalid @enderror " id="" name="link" aria-describedby="">
                      @error('link')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    
                     <div class="mb-3">
                        <label for="" class="form-label">Ads Images</label>
                        <input type="file" class="form-control @error('ads') is-invalid @enderror" id="" name="ads" aria-describedby="">
                        @error('ads')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Ads Type</label>
                        <select name="type" id="" class="form-control">
                        <option value="2">Horizontal</option>
                        <option value="1">Vertical</option>
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