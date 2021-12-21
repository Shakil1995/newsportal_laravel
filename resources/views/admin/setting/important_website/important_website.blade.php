@extends('layouts.app')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Important Website</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Important Website</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All Important Website</h3>
      <button class="btn btn-danger btn-sm"  style="float: right" data-toggle="modal"  data-target="#modal-default">Add New</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Important name Bangla</th>
          <th>Important  name English</th>
          <th>Important Link</th>
          <th>Action</th>
        
        </tr>
        </thead>
        <tbody>

            @foreach ($important_website  as $row )
                
  
        <tr>
          <td>{{$row->websiteName_bn}}</td>
          <td>{{$row->websiteName_en}}</td>
          <td>{{$row->websiteName_link}}</td>
          <td>
{{-- <a href="{{URL::to('edit.category'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a> --}}
<a href="{{route('edit.important_website',$row->id)}}" class="btn btn-info" > <i class="fa fa-edit"></i></a>
<a href="{{route('delete.important_website',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a> 

          </td>
         
        </tr>
        @endforeach
      
       
        
      
        </tfoot>
      </table>

    </div>


{{-- add new Important Website  --}}

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Inset new Important Website</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <form action="{{route('store.important_website')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Important Website Name Bangla</label>
                      <input type="text" class="form-control @error('websiteName_bn') is-invalid @enderror " id="" name="websiteName_bn" aria-describedby="">
                      @error('websiteName_bn')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    
                     <div class="mb-3">
                        <label for="" class="form-label">Important Website Name English</label>
                        <input type="text" class="form-control @error('websiteName_en') is-invalid @enderror" id="" name="websiteName_en" aria-describedby="">
                        @error('websiteName_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Important Website Link</label>
                        <input type="text" class="form-control @error('websiteName_link') is-invalid @enderror" id="" name="websiteName_link" aria-describedby="">
                        @error('websiteName_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </form>

            </div>

          </div>
        </div>
      </div>


{{-- Update important Website --}}
  {{--    <div class="modal fade" id="update">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update  new Important Website</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Important Website Name Bangla</label>
                      <input type="text" class="form-control @error('websiteName_bn') is-invalid @enderror " id=""  value="{{$website->websiteName_bn}}"  name="websiteName_bn" aria-describedby="">
                      @error('websiteName_bn')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
                    
                     <div class="mb-3">
                        <label for="" class="form-label">Important Website Name English</label>
                        <input type="text" class="form-control @error('websiteName_en') is-invalid @enderror" id="" name="websiteName_en" aria-describedby="">
                        @error('websiteName_en')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Important Website Link</label>
                        <input type="text" class="form-control @error('websiteName_link') is-invalid @enderror" id="" name="websiteName_link" aria-describedby="">
                        @error('websiteName_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                  </form>

            </div>

          </div>
        </div>

      </div> --}}



  @endsection