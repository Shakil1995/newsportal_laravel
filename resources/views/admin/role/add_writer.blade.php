@extends('layouts.app')

@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">User</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">User Role</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title">All User</h3>
      <button class="btn btn-danger btn-sm"  style="float: right" data-toggle="modal"  data-target="#modal-default">Add New</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>user  name</th>
          <th>User  Email</th>
          <th>User  acces</th>
          <th>Action</th>
        
        </tr>
        </thead>
        <tbody>

            @foreach ($user  as $row )
                
  
        <tr>
          <td>{{$row->name}}</td>
          <td>{{$row->email }}</td>
          <td>
 @if ($row->categorie==1)
 <samp class="badge badge-success"> Category</samp>
 @else
 @endif
 @if ($row->districts==1)
 <samp class="badge badge-success"> districts</samp>
 @else
 @endif
 @if ($row->post==1)
 <samp class="badge badge-success"> post</samp>
 @else
 @endif
 @if ($row->setting==1)
 <samp class="badge badge-success"> setting</samp>
 @else
 @endif

 @if ($row->gallery==1)
 <samp class="badge badge-success"> gallery</samp>
 @else
 @endif
 @if ($row->ads==1)
 <samp class="badge badge-success"> ads</samp>
 @else
 @endif
 @if ($row->user_role==1)
 <samp class="badge badge-success"> user_role</samp>
 @else
 @endif

          </td>
          <td>
{{-- <a href="{{URL::to('edit.category'.$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a> --}}
<a href="{{route('edit.user',$row->id)}}" class="btn btn-info"> <i class="fa fa-edit"></i></a>
<a href="{{route('delete.user',$row->id)}}" class="btn btn-danger" id="delete"> <i class="fa fa-trash"></i></a> 

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
              <h4 class="modal-title">Inset new user</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            
                <form action="{{route('store.user')}}" method="post" >
                    @csrf
                    <div class="form-group">
                      <label for="" class="form-label">User Name </label>
                      <input type="text" class="form-control " id="" name="name" aria-describedby="">                   
                    </div>
                    
                     <div class="form-group" >
                        <label for="" class="form-label">User Email </label>
                        <input  type="email" class="form-control " id="" name="email"  >
                    </div>

                    <div class="form-group">
                        <label for="" class="form-label">User password </label>
                        <input type="password" class="form-control " id="" name="password" >  
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="" class="form-label">category</label>
                            <input type="checkbox" class="form-control" id="" name="categorie" value="1"  >
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="form-label">Districts</label>
                            <input type="checkbox" class="form-control" id="" name="districts" value="1"   >
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="form-label">setting</label>
                            <input type="checkbox" class="form-control" id="" name="setting"  value="1" >
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label for="" class="form-label">gallery</label>
                            <input type="checkbox" class="form-control" id="" name="gallery" value="1"  >
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="" class="form-label">Post</label>
                            <input type="checkbox" class="form-control" id="" name="post"  value="1" >
                        </div> 
                        <div class="form-group col-lg-3">
                            <label for="" class="form-label">Role</label>
                            <input type="checkbox" class="form-control" id="" name="user_role" value="1"  >
                        </div>     
                        {{-- <div class="form-group col-lg-3">
                            <label for="" class="form-label">type</label>
                            <input type="checkbox" class="form-control" id="" name="type "  >
                        </div>              
                                      --}}
                       
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