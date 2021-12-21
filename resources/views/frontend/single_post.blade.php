@extends('layouts.front')
@section('content')
@section('meta')
  <meta property="og:url" content="{{Request::fullUrl()}}" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{ $post->title_bn }}" />
  <meta property="og:description" content="{{ $post->details_bn }}" />
  <meta property="og:image" content="{{URL::to($post->image_first)}}" />
@endsection
<hr>
<div class="row">
	<div class="col-md-12">
		@php
		$horizontal1=DB::table('ads')->where('type',2)->orderBY('id','ASC')->first();
	   @endphp

@if($horizontal1==NULL)
@else
<a href="{{ $horizontal1->link}}"  target="_blank" ><img src="{{asset($horizontal1->ads)}}" alt="" /></a>
@endif
		{{-- <div class="add"><img src="{{asset($ads->ads)}}" alt="" /></div> --}}
	</div>
	<hr>
</div><!-- /.add-close -->	


	<!-- single-page-start -->
	
	<section class="single-page  ">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ol class="breadcrumb">   
					   <li> <a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>					   
						<li><a href="#"> 
                        	@if(session()->get('lang')== 'english')
									{{$post->category_en}}
									@else
									{{$post->category_bn}}
									 @endif    
                        </a></li>
						<li><a href="#">
                        	@if(session()->get('lang')== 'english')
									{{$post->subcategory_en}}
									@else
									{{$post->subcategory_bn}}
									 @endif    
                        </a></li>
					</ol>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12"> 											
					<header class="headline-header margin-bottom-10">
						<h1 class="headline">
                            @if(session()->get('lang')== 'english')
									{{$post->title_en}}
									@else
									{{$post->title_bn}}
									 @endif  
                            </h1>
					</header>
		 
		 
				 <div class="article-info margin-bottom-20">
				  <div class="row">
						<div class="col-md-6 col-sm-6"> 
						 <ul class="list-inline">
						 
						 
						 <li>
                            @if(session()->get('lang')== 'english')
                            {{$post->name}}
                            @else
                            {{$post->name}}
                             @endif  
                            </li>     <li><i class="fa fa-clock-o"></i> 
                            @if(session()->get('lang')== 'english')
                            {{$post->post_date}}
                            @else
                            {{$post->post_date}}
                             @endif  
                        </li>
						 </ul>
						
						</div>
						<div class="col-md-6 col-sm-6 pull-right"> 						
							<ul class="social-nav">
						
							</ul>						   
						</div>						
					</div>				 
				 </div>				
			</div>
		  </div>
          
		  <!-- ******** -->
		  <div class="row">
			<div class="col-md-8 col-sm-8">
				<div class="single-news">
					<img   style="width: 800px; height:400px;  " class="text-canter" src="{{asset($post->image_first)}}" alt=" {{$post->title_bn}}" />
					<h4 class="caption">
                        @if(session()->get('lang')== 'english')
                        {{$post->title_en}}
                        @else
                        {{$post->title_bn}} 
                         @endif  
                    </h4> <hr>

                    <div class="sharethis-inline-share-buttons"></div>
					<p>
                        @if(session()->get('lang')== 'english')
                        {!!$post->details_en!!}
                        @else
                        {!!$post->details_bn!!}
                         @endif 

                    </p>
				</div>

                <div class="comment-section " style="width: 100%;"> 
                    <!-- Begin .title-style01 -->
                    <div class=" comment-title title-style01 ">
                      <h4> Comments</h4>
                    </div>
                    <!-- End .title-style01 -->
                    <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5">
                    </div>
                  </div><hr>
                  {{-- <div class="fb-comment-embed"
   data-href="{{ Request::url()}}"
   data-width="500"></div> --}}

 


				<!-- ********* -->
				<div class="row">
					<div class="col-md-12"><h2 class="heading">
                        @if(session()->get('lang')== 'english')
                       More News
                        @else
                        আরো সংবাদ
                         @endif
                        
                    </h2></div>
                    @php
                        $moreNews=DB::table('posts')->where('cat_id',$post->cat_id)->orderBy('id','DESC')->limit(9)->get();

                    @endphp

                    @foreach ($moreNews as $row)    
                    @php
					$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
					@endphp                                 
					<div class="col-md-4 col-sm-4">
						<div class="top-news sng-border-btm">
							<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
							<h4 class="heading-02"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">

                                @if(session()->get('lang')== 'english')
                                {{$row->title_en}}
                                @else
                                {{$row->title_bn}}
                                 @endif

                            </a> </h4>
						</div>
					</div>
                    @endforeach

					
				</div>
				
			</div>
			<div class="col-md-4 col-sm-4">
				<!-- add-start -->	
					<div class="row">
						@php
								$vartical1=DB::table('ads')->where('type',1)->orderBY('id','ASC')->first();
							   @endphp
						<div class="col-md-12 col-sm-12">
							{{-- <div class="sidebar-add"><img src="{{asset('public/frontend/assets/img/add_01.jpg')}}" alt="" /></div> --}}
							@if($vartical1==NULL)
@else
<a href="{{ $vartical1->link}}"  target="_blank" ><img src="{{asset($vartical1->ads)}}" alt="" /></a>
@endif
						</div>
					</div><!-- /.add-close -->

				<div class="tab-header">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">
								@if(session()->get('lang')== 'english')
								Latest News
									@else
									<b>	সর্বশেষ</b>
									 @endif
							
							</a></li>
							<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">
								@if(session()->get('lang')== 'english')
								Popular
									@else
									<b>	জনপ্রিয়</b>
									 @endif
								</a></li>
							<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">
								@if(session()->get('lang')== 'english')
							Top view
									@else
									<b>	টপ ভিউ</b>
									 @endif</a></li>
						</ul>

						@php
							$latest=DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
							$populernew=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(8)->get();
							$topnews=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(8)->get();
						@endphp
						<!-- Tab panes -->
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane in active" id="tab21">
								<div class="news-titletab">
									@foreach ( $latest as $row )
										
                                    @php
                                    $slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
                                    @endphp 
									<div class="news-title-02">
										<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
											@if(session()->get('lang')== 'english')
						          	{{$row->title_en}}
									@else
									{{	$row->title_bn}}
									 @endif
										</a> </h4>
									</div>
									@endforeach
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab22">
								<div class="news-titletab">
									@foreach ( $populernew as $row )
                                    @php
                                    $slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
                                    @endphp 
									<div class="news-title-02">
										
										<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
											@if(session()->get('lang')== 'english')
											{{$row->title_en}}
										  @else
										  {{	$row->title_bn}}
										   @endif
										</a> </h4>
									</div>
								@endforeach
								</div>                                          
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab23">	
								<div class="news-titletab">

									@foreach ( $topnews as $row )
                                    @php
                                    $slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
                                    @endphp 
									<div class="news-title-02">
										
										<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
											@if(session()->get('lang')== 'english')
											{{$row->title_en}}
										  @else
										  {{	$row->title_bn}}
										   @endif
										</a> </h4>
									</div>
								@endforeach
									
								</div>						                                          
							</div>
						</div>
					</div>
				<!-- add-start -->	
					<div class="row">
						@php
						$vartical2=DB::table('ads')->where('type',1)->skip(1)->orderBY('id','ASC')->first();
					   @endphp
						<div class="col-md-12 col-sm-12">
							@if($vartical2==NULL)
@else
<a href="{{ $vartical2->link}}"  target="_blank" ><img src="{{asset($vartical2->ads)}}" alt="" /></a>
@endif
						</div>
					</div><!-- /.add-close -->
			</div>
		  </div>
		</div>
	</section>


    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/bn_IN/sdk.js#xfbml=1&version=v3.2&appId=157325511530244&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5bf015c8b4a6560011bd9a88&product=inline-share-buttons' data-href="{{ Request::url() }}" async='async'></script>

{{-- <!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script> --}}


@endsection