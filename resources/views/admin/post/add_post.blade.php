@extends('layouts.app')
@section('content')
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Post</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Add Post</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>




  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
   <!-- general form elements -->
   <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Inset New Post </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('store.post')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Title Bangla</label>
          <input type="text" class="form-control"  name="title_bn">
        </div>
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Title English</label>
          <input type="text" class="form-control" name="title_en"  >
        </div>
      </div>


      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Category</label>
   <select name="cat_id" id=""  class="form-control">
<option selected="" disabled="" >==Choose One==</option>
@foreach ( $category as $row)
<option value="{{$row->id}}"  >{{$row->category_bn}} ||{{$row->category_en}}  </option>
@endforeach
 </select>
        </div>
        
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Sub Category</label>
          <select name="subcat_id" id="subcat_id"  class="form-control">
            <option selected="" disabled="" >==Choose One==</option>

          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">District</label>
   <select name="dist_id" id="dist_id"  class="form-control">
<option selected="" disabled="" >==Choose One==</option>
@foreach ( $district as $row)
<option value="{{$row->id}}"  >{{$row->district_bn}} ||{{$row->district_en}}  </option>
@endforeach
 </select>
        </div>
        
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Sub District</label>
          <select name="subdist_id" id="subdist_id"  class="form-control">
            <option selected="" disabled="" >==Choose One==</option>

          </select>
        </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="">Choose First Image</label>
        <input type="file" class="" id="" name="image_first">
       
      </div>
      <div class="form-group col-md-6">
        <label for="">Choose second Image</label>
        <input type="file" class="" id="" name="image_second">
       
      </div>
      <div class="form-group col-md-6">
        <label for="">Choose third Image</label>
        <input type="file" class="" id="" name="image_third">
       
      </div>
    </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Tags Bangla</label> <br>
          <input type="text" class="form-control"  name="tags_bn">
        </div>
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">tags English</label>
          <input type="text" class="form-control" name="tags_en"  >
        </div>
      </div>

   

      <div class="row">
        <div class="form-group col-md-12">
          <label for="exampleInputEmail1">Details Bangla</label>
          <textarea  id="summernote" name="details_bn">
           
          </textarea>

        </div>
        <div class="form-group col-md-12">
          <label for="exampleInputEmail1">Details English</label>
          <textarea class="textarea" id="summernote" name="details_en">
           
          </textarea>
        </div>
      </div>
    
<hr>
<h4 class="text-center mb-5" > Extra Option  </h4>

<div class="row text-center">
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"  name="headline" value="1">
    <label class="form-check-label" for="exampleCheck1">headLine</label>
  </div>
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"  name="first_section" value="1" >
    <label class="form-check-label" for="exampleCheck1">First Section</label>
  </div>
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"  name="first_section_thumbnail" value="1" >
    <label class="form-check-label" for="exampleCheck1">First Section lastet</label>
  </div>
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"   name="big_thumbnail" value="1">
    <label class="form-check-label" for="exampleCheck1"> category big Thumbnail  </label>
  </div>

</div>
<hr>
       

      <div class="card-footer text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>




<script type="text/javascript">
  $(document).ready(function() {
        $('select[name="cat_id"]').on('change', function(){
            var cat_id = $(this).val();         
            if(cat_id) {
                $.ajax({
                    url: "{{url('/get/subcat/')}}/"+cat_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       $("#subcat_id").empty();
                             $.each(data,function(key,value){
                                 $("#subcat_id").append('<option value="'+value.id+'">'+value.subcategory_bn ||value.subcategory_en +' </option>');
                             });
                             console.log(data);

                    },
                   
                });
            } else {
                alert('danger');
            }

        });
    });

</script>

<script type="text/javascript">
  $(document).ready(function() {
        $('select[name="dist_id"]').on('change', function(){
            var dist_id = $(this).val();         
            if(dist_id) {
                $.ajax({
                    url: "{{url('/get/subdist/')}}/"+dist_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       $("#subdist_id").empty();
                             $.each(data,function(key,value){
                                 $("#subdist_id").append('<option value="'+value.id+'">'+value.subdistrict_bn+'</option>');
                             });
                            //  console.log(data);

                    },
                   
                });
            } else {
                alert('danger');
            }

        });
    });

</script>


@endsection