@extends('layouts.app')
@section('content')
<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@php
    $sub=DB::table('subcategories')->where('category_id',$post->cat_id)->get();
    $sub_district=DB::table('subdistricts')->where('district_id',$post->dist_id)->get();
@endphp
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Update  Post</h1>
         
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Update  Post</li>
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
      <h3 class="card-title">Update Post </h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{route('update.post',$post->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card-body">

        <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Title Bangla</label>
          <input type="text" class="form-control"  name="title_bn" value="{{$post->title_bn}}" >
        </div>
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Title English</label>
          <input type="text" class="form-control" name="title_en" value="{{$post->title_en}}" >
        </div>
      </div>


      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Category</label>
   <select name="cat_id" id=""  class="form-control">
<option selected="" disabled="" >==Choose One==</option>
@foreach ( $category as $row)
<option value="{{$row->id}}" 
    <?php if ($row->id == $post->cat_id) {
       echo "selected";
    }?>
    >{{$row->category_bn}} ||{{$row->category_en}}  </option>
@endforeach
 </select>
        </div>
        
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Sub Category</label>
          <select name="subcat_id" id="subcat_id"  class="form-control">
            <option selected="" disabled="" >==Choose One==</option>
            @foreach ( $sub as $row)
            <option value="{{$row->id}}" 
                <?php if ($row->id == $post->subcat_id) {
                   echo "selected";
                }?>
                >{{$row->subcategory_bn}} ||{{$row->subcategory_en}}  </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">District</label>
   <select name="dist_id" id="dist_id"  class="form-control">
<option selected="" disabled="" >==Choose One==</option>
@foreach ( $district as $row)
<option value="{{$row->id}}" 
    <?php if ($row->id == $post->dist_id) {
        echo "selected";
     }?>
     >{{$row->district_bn}} ||{{$row->district_en}}  </option>
@endforeach
 </select>
        </div>
        
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Sub District</label>
          <select name="subdist_id" id="subdist_id"  class="form-control">
            <option selected="" disabled="" >==Choose One==</option>
            @foreach ( $sub_district as $row)
            <option value="{{$row->id}}" 
                <?php if ($row->id == $post->subdist_id) {
                   echo "selected";
                }?>
                >{{$row->subdistrict_bn}} ||{{$row->subdistrict_en}}  </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row">
      <div class="form-group col-md-6">
        <label for="">Choose First Image</label>
        <input type="file" class="" id="" name="image_first">
        </div>
        <div class="form-group col-md-6">
            <label for=""> First Old Image</label>
<img src="{{URL::to($post->image_first)}}" alt="" style="height: 50px" width="70px">
<input type="hidden" name="oldFirstImages" value="{{$post->image_first}}">
        </div>
    </div>



    <div class="row">
      <div class="form-group col-md-6">
        <label for="">Choose second Image</label>
        <input type="file" class="" id="" name="image_second">
    </div>
    <div class="form-group col-md-6">
        <label for=""> second Old Image</label>
        <img src="{{URL::to($post->image_second)}}" alt="" style="height: 50px" width="70px">
        <input type="hidden" name="oldSecondImages" value="{{$post->image_second}}">
    </div>
</div>

<div class="row">

      <div class="form-group col-md-6">
        <label for="">Choose third Image</label>
        <input type="file" class="" id="" name="image_third">
       
    </div>
    <div class="form-group col-md-6">
        <label for=""> third Old Image</label>
        <img src="{{URL::to($post->image_third)}}" alt="" style="height: 50px" width="70px">
        <input type="hidden" name="oldThirdImages" value="{{$post->image_third}}">
    </div>
</div>

      <div class="row">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Tags Bangla</label> <br>
          <input type="text" class="form-control"  name="tags_bn"  value="{{$post->tags_bn}}">
        </div>
          <div class="form-group col-md-6">
          <label for="exampleInputPassword1">tags English</label>
          <input type="text" class="form-control" name="tags_en" value="{{$post->tags_en}}" >
        </div>
      </div>

   

      <div class="row">
        <div class="form-group col-md-12">
          <label for="exampleInputEmail1">Details Bangla</label>
          <textarea  id="summernote" name="details_bn"   >
            {{$post->details_bn}}
          </textarea>

        </div>
        <div class="form-group col-md-12">
          <label for="exampleInputEmail1">Details English</label>
          <textarea class="textarea" id="summernote" name="details_en" value="" >
            {{$post->details_en}}
          </textarea>
        </div>
      </div>
    
<hr>
<h4 class="text-center mb-5" > Extra Option  </h4>

<div class="row text-center">
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"  name="headline" value="1"  <?php if ($post->headline) {
       echo "checked";
    } ?>  >
    <label class="form-check-label" for="exampleCheck1">headLine</label>
  </div>
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"  name="first_section" value="1" <?php if ($post->first_section) {
        echo "checked";
     } ?>  >
    <label class="form-check-label" for="exampleCheck1">First Section </label>
  </div>
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"  name="first_section_thumbnail" value="1"<?php if ($post->first_section_thumbnail) {
        echo "checked";
     } ?>  >
    <label class="form-check-label" for="exampleCheck1">First Section thumbnail </label>
  </div>
  <div class="form-check col-md-4 ">
    <input type="checkbox" class="form-check-input"   name="big_thumbnail" value="1"<?php if ($post->big_thumbnail) {
        echo "checked";
     } ?>  >
    <label class="form-check-label" for="exampleCheck1">Big Thumbnail</label>
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
                                 $("#subcat_id").append('<option value="'+value.id+'">'+value.subcategory_bn+'</option>');
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