@php
	$prayerTime=DB::table('prayer')->orderBY('id','ASC')->get();
	$seo=DB::table('seos')->first();
@endphp


@extends('layouts.front')
@section('content')

@php
	$bigthumbnail=DB::table('posts')->where('big_thumbnail',1)->orderBY('id','DESC')->first();
@endphp

	<!-- 1st-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-8">
					<div class="row">
						<div class="col-md-1 col-sm-1 col-lg-1"></div>
						<div class="row">
							{{-- <div class="col-md-12 col-sm-6">
								@php
								$horizontal1=DB::table('ads')->where('type',2)->orderBY('id','ASC')->first();
							   @endphp

@if($horizontal1==NULL)
@else
<a href="{{ $horizontal1->link}}"  target="_blank" ><img src="{{asset($horizontal1->ads)}}" alt="" /></a>
@endif
						
							</div> --}}
						</div><!-- /.add-close -->	
						<div class="col-md-10 col-sm-10">
							<div class="lead-news">
@php
	$slug=preg_replace('/\s+/u', '-',trim($bigthumbnail->title_bn) );
	// dd($slug);
@endphp
								<div class="service-img"><a href="{{URL::to('view-post/'.$bigthumbnail->id.'/'.$slug)}}"><img src="{{$bigthumbnail->image_first}}" alt="Notebook"></a></div>
								<div class="content">
								<h4 class="lead-heading-01"><a href="{{URL::to('view-post/'.$bigthumbnail->id.'/'.$slug)}}">
									@if(session()->get('lang')== 'english')
									{{$bigthumbnail->title_en}}
									@else
									{{$bigthumbnail->title_bn}}
									 @endif
								
								</a> </h4>
								</div>
							</div>
						</div>
						
					</div>


<div class="cetagory-title">
	@if(session()->get('lang')== 'english')
	<h6>Latest </h6>
	@else
<h3><b>সর্বশেষ</b> </h3>	
	 @endif
	

		 
		</div>

					@php
					  $first_section=DB::table('posts')->where('first_section_thumbnail',1)->orderBY('id','DESC')->limit(8)->get();
			    	@endphp
						<div class="row">							
							@foreach ( $first_section as $raw)
								@php
								$slug=preg_replace('/\s+/u', '-',trim($raw->title_bn) );
								// dd($slug);
						     	@endphp
								<div class="col-md-3 col-sm-3">
									<div class="top-news">
										<a href="{{URL::to('view-post/'.$raw->id.'/'.$slug)}}"><img   src="{{$raw->image_first}}" alt="Notebook"></a>
										<h4 class="heading-02" style="height: 80px" ><a href="{{URL::to('view-post/'.$raw->id.'/'.$slug)}}">
								@if(session()->get('lang')== 'english')
								   	{{$raw->title_en}}
									@else
									{{$raw->title_bn}}
									 @endif		
									</a> </h4>
									</div>
								</div>
								@endforeach
								</div>					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-6 col-sm-12">
							@php
								  $horizontal2=DB::table('ads')->where('type',2)->skip(1)->orderBY('id','ASC')->first();
							@endphp
					
							<div class="add">
@if($horizontal2==NULL)
@else
<a href="{{ $horizontal2->link}}"  target="_blank" ><img src="{{asset($horizontal2->ads)}}" alt="" /></a>
@endif

							
							</div>
						</div>
					</div><!-- /.add-close -->	
					@php
					$categorie=DB::table('categories')->first();
					 $firstcatpost=DB::table('posts')->where('cat_id',$categorie->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
					 $firstcatpostsmail=DB::table('posts')->where('cat_id',$categorie->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();

					@endphp
					<!-- news-start -->
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								
		
								<div class="cetagory-title">
									@if(session()->get('lang')== 'english')
									{{$categorie->category_en}} 
									@else
									<b>{{$categorie->category_bn}}</b> 
									 @endif
									 <a href="{{url::to('post/'.$categorie->id.'/'.$categorie->category_bn)}}">
									 <span>
										@if(session()->get('lang')== 'english') 	More 
										@else
										আরও
										 @endif
								
										 
										 <i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">

									    	@php
											$slug=preg_replace('/\s+/u', '-',trim($firstcatpost->title_bn) );
											// dd($slug);
											@endphp

										<div class="top-news">
											<a href="{{URL::to('view-post/'.$firstcatpost->id.'/'.$slug)}}"><img  src="{{asset($firstcatpost->image_first)}}" alt="Notebook"></a>
											<h4 class="heading-02"><a href="{{URL::to('view-post/'.$firstcatpost->id.'/'.$slug)}}">

										@if(session()->get('lang')== 'english')
									{{$firstcatpost->title_en}}
									@else
									<b>{{$firstcatpost->title_bn}}</b>
									 @endif
											
											</a> </h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">

									
											
									
										<div class="image-title">
											@foreach ($firstcatpostsmail as $raw)
											@php
											$slug=preg_replace('/\s+/u', '-',trim($raw->title_bn) );
											// dd($slug);
											@endphp
											<a href="{{URL::to('view-post/'.$raw->id.'/'.$slug)}}"><img  src="{{asset($raw->image_first)}}" alt="Notebook"></a>
											<h4 class="heading-03"><a href="{{URL::to('view-post/'.$raw->id.'/'.$slug)}}">

												@if(session()->get('lang')== 'english')
									{{$raw->title_en}}
									@else
									<b>{{$raw->title_bn}}</b>
									 @endif
											</a> </h4>
											@endforeach
										</div>
										
									</div>
								</div>
							</div>
						</div>

						@php
						$secondCat=DB::table('categories')->skip(3)->first();
						$secondcatpost=DB::table('posts')->where('cat_id',$secondCat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
						$secondcatpostsmail=DB::table('posts')->where('cat_id',$secondCat->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
                    	@endphp

						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title"><a href="#">
									
									@if(session()->get('lang')== 'english')
									{{$secondCat->category_en}}
									@else
									<b>{{$secondCat->category_bn}}</b>
									 @endif
									 <a href="{{url::to('post/'.$secondCat->id.'/'.$secondCat->category_bn)}}">
									 <span>
										@if(session()->get('lang')== 'english')
									    More 
										@else
										আরও 
										 @endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										@php
										$slug=preg_replace('/\s+/u', '-',trim($secondcatpost->title_bn) );
										// dd($slug);
										@endphp
										<div class="top-news">
										<a href="{{URL::to('view-post/'.$secondcatpost->id.'/'.$slug)}}"><img  src="{{asset($secondcatpost->image_first)}}" alt="Notebook"></a>
										<h4 class="heading-02"><a href="{{URL::to('view-post/'.$secondcatpost->id.'/'.$slug)}}">
                                       @if(session()->get('lang')== 'english')
									{{$secondcatpost->title_en}}
									@else
									<b>
								     {{$secondcatpost->title_bn}}</b>
									 @endif
									</a> 
								</h4>
										</div>
									</div>
									<div class="col-md-6 col-sm-6">
										@foreach($secondcatpostsmail as  $row)
										@php
										$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
										// dd($slug);
									@endphp
										<div class="image-title">
                                        <a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
											<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
								 @if(session()->get('lang')== 'english')
									{{$row->title_en}}
									@else
									<b>
								     {{$row->title_bn}}</b>
									 @endif																							
											</a>
										 </h4>
										</div>
										 @endforeach
									
										
									</div>
								</div>
							</div>
						</div>

					</div>					
				</div>
				<div class="col-md-3 col-sm-3">
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							@php
							$vertical1=DB::table('ads')->where('type',1)->orderBY('id','ASC')->first();
						   @endphp

@if($vertical1==NULL)
@else
<a href="{{ $vertical1->link}}"  target="_blank" ><img src="{{asset($vertical1->ads)}}" alt="" /></a>
@endif
						</div>
					</div><!-- /.add-close -->	
					@php
	           $tv=DB::table('livetv')->first();
                @endphp
			
					
		
					<!-- youtube-live-start -->	
					<div class="cetagory-title-03">
						@if (session()->get('lang')=='english')
						Live Tv
							@else
							লাইভ টিভি
							@endif
						 </div>
					<div class="photo">
						@if ($tv->status==1)
						<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
							{!! $tv->embed_code!!}
						</div>
						@endif
					</div><!-- /.youtube-live-close -->	
				
					<!-- facebook-page-start -->
					<div class="cetagory-title-03">ফেসবুকে আমরা</div>
					{{-- <div class="fb-root">
						<div class="fb-page" data-href="https://www.facebook.com/ehtirambd" data-tabs="" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="" class="fb-xfbml-parse-ignore"><a href="">Ehtirambd</a></blockquote></div>
						  <div id="fb-root"></div>
						   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=251302696084561&autoLogAppEvents=1"></script>
					</div>	 --}}

					<div class="fb-page" data-href="https://www.facebook.com/thesmilingchildren.org/?ref=pages_you_manage" data-tabs="timeline" data-width="400" data-height="354" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thesmilingchildren.org/?ref=pages_you_manage" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thesmilingchildren.org/?ref=pages_you_manage">The Smiling Children organization</a></blockquote></div>
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								@php
								$vertical2=DB::table('ads')->where('type',1)->skip(1)->orderBY('id','ASC')->first();
							   @endphp
	
	@if($vertical2==NULL)
	@else
	<a href="{{ $vertical2->link}}"  target="_blank" ><img src="{{asset($vertical2->ads)}}" alt="" /></a>
	@endif
			
							</div>
						</div>
					</div><!-- /.add-close -->	
				</div>
			</div>
		</div>
	</section><!-- /.1st-news-section-close -->
	@php
	$fourCat=DB::table('categories')->skip(4)->first();
	$fourcatpost=DB::table('posts')->where('cat_id',$fourCat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
	$fourcatpostsmail=DB::table('posts')->where('cat_id',$fourCat->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
	@endphp

	<!-- 2nd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">

							@if(session()->get('lang')== 'english')
							{{$fourCat->category_en}}
							@else
							<b>{{$fourCat->category_bn}}</b>
							 @endif
							 <a href="{{url::to('post/'.$fourCat->id.'/'.$fourCat->category_bn)}}">
								<span>
								   @if(session()->get('lang')== 'english')
								   More 
								   @else
								   আরও
									@endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>

						<div class="row">
							<div class="col-md-6 col-sm-6">

								<div class="top-news">
									@php
										$slug=preg_replace('/\s+/u', '-',trim($fourcatpost->title_bn) );
										// dd($slug);
										@endphp
									<a href="{{URL::to('view-post/'.$fourcatpost->id.'/'.$slug)}}"><img src="{{asset($fourcatpost->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$fourcatpost->id.'/'.$slug)}}">
										@if(session()->get('lang')== 'english')
										{{$fourcatpost->title_en}}
										@else
										<b>
										 {{$fourcatpost->title_bn}}</b>
										 @endif
									
									</a> </h4>
								</div>

							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($fourcatpostsmail as  $row)
								<div class="image-title">
									@php
									$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
									// dd($slug);
									@endphp
								<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
						 @if(session()->get('lang')== 'english')
							{{$row->title_en}}
							@else
							<b>
							 {{$row->title_bn}}</b>
							 @endif
								</a>
								 </h4>
								</div>
								 @endforeach
								
							</div>
						</div>
					</div>
				</div>
				@php
				$oneCat=DB::table('categories')->skip(5)->first();
				$onecatpost=DB::table('posts')->where('cat_id',$oneCat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
				$onecatpostsmail=DB::table('posts')->where('cat_id',$oneCat->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
				@endphp
			

				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">
							
							@if(session()->get('lang')== 'english')
							{{$oneCat->category_en}}
							@else
							<b>{{$oneCat->category_bn}}</b> 
							 @endif
							 <a href="{{url::to('post/'.$oneCat->id.'/'.$oneCat->category_bn)}}">
								<span>
								   @if(session()->get('lang')== 'english')
								   More 
								   @else
								   আরও 
									@endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									@php
									$slug=preg_replace('/\s+/u', '-',trim($onecatpost->title_bn) );
									// dd($slug);
									@endphp
									<a href="{{URL::to('view-post/'.$onecatpost->id.'/'.$slug)}}"><img src="{{asset($onecatpost->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$onecatpost->id.'/'.$slug)}}">
										@if(session()->get('lang')== 'english')
										{{$onecatpost->title_en}}
										@else
										<b>
										 {{$onecatpost->title_bn}}</b>
										 @endif
									</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">

									@foreach($onecatpostsmail as  $row)
								<div class="image-title">
									@php
									$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
									// dd($slug);
									@endphp
								<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
						 @if(session()->get('lang')== 'english')
							{{$row->title_en}}
							@else
							<b>
							 {{$row->title_bn}}</b>
							 @endif
								</a>
								 </h4>
								</div>
								 @endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ******* -->
			@php
			$sevenCat=DB::table('categories')->skip(7)->first();
			$sevenpost=DB::table('posts')->where('cat_id',$sevenCat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
			$sevenpostsmail=DB::table('posts')->where('cat_id',$sevenCat->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
			@endphp
		
			{{-- <div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">
							
							@if(session()->get('lang')== 'english')
						 <b>	{{$sevenCat->category_en}}</b>
							@else
							<b>{{$sevenCat->category_bn}}</b>
							 @endif
							
							 <a href="{{url::to('post/'.$sevenCat->id.'/'.$sevenCat->category_bn)}}">
								<span>
								   @if(session()->get('lang')== 'english')
								   More 
								   @else
								   আরও
									@endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									@php
									$slug=preg_replace('/\s+/u', '-',trim($sevenpost->title_bn) );
									@endphp
									<a href="{{URL::to('view-post/'.$sevenpost->id.'/'.$slug)}}"><img src="{{asset($sevenpost->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$sevenpost->id.'/'.$slug)}}">

										@if(session()->get('lang')== 'english')
										{{$sevenpost->title_en}}
										@else
										<b>
										 {{$sevenpost->title_bn}}</b>
										 @endif
									
									</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($sevenpostsmail as  $row)
								<div class="image-title">
									@php
									$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
									@endphp
								<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
						 @if(session()->get('lang')== 'english')
							{{$row->title_en}}
							@else
							<b>
							 {{$row->title_bn}}</b>
							 @endif
								</a>
								 </h4>
								</div>
								 @endforeach
								
							</div>
						</div>
					</div>
				</div>

				@php
				$eightCat=DB::table('categories')->skip(8)->first();
				$eightpost=DB::table('posts')->where('cat_id',$eightCat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
				$eightpostsmail=DB::table('posts')->where('cat_id',$eightCat->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
				@endphp

				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">
							
							@if(session()->get('lang')== 'english')
						 <b>	{{$eightCat->category_en}}</b>
							@else
							<b>{{$eightCat->category_bn}}</b> 
							 @endif
							
							 <a href="{{url::to('post/'.$eightCat->id.'/'.$eightCat->category_bn)}}">
								<span>
								   @if(session()->get('lang')== 'english')
								   More 
								   @else
								   আরও
									@endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									@php
									$slug=preg_replace('/\s+/u', '-',trim($eightpost->title_bn) );
									@endphp
									<a href="{{URL::to('view-post/'.$eightpost->id.'/'.$slug)}}"><img src="{{asset($eightpost->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$eightpost->id.'/'.$slug)}}">

										@if(session()->get('lang')== 'english')
										{{$eightpost->title_en}}
										@else
										<b>
										 {{$eightpost->title_bn}}</b>
										 @endif
									
									</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach($eightpostsmail as  $row)
								<div class="image-title">
									@php
									$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
									@endphp
								<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
						 @if(session()->get('lang')== 'english')
							{{$row->title_en}}
							@else
							<b>
							 {{$row->title_bn}}</b>
							 @endif
								</a>
								 </h4>
								</div>
								 @endforeach
								
							</div>
						</div>
					</div>
				</div>
			</div> --}}
			<!-- add-start -->	
			<hr>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					@php
						  $horizontal2=DB::table('ads')->where('type',2)->skip(1)->orderBY('id','ASC')->first();
					@endphp
			
					<div class="add">
@if($horizontal2==NULL)
@else
<a href="{{ $horizontal2->link}}"  target="_blank" ><img src="{{asset($horizontal2->ads)}}" alt="" /></a>
@endif

					
					</div>
				</div>
				<div class="col-md-6 col-sm-12">
					@php
						  $horizontal2=DB::table('ads')->where('type',2)->skip(1)->orderBY('id','ASC')->first();
					@endphp
			
					<div class="add">
@if($horizontal2==NULL)
@else
<a href="{{ $horizontal2->link}}"  target="_blank" ><img src="{{asset($horizontal2->ads)}}" alt="" /></a>
@endif

					
					</div>
				</div>
			</div><!-- /.add-close -->	
			
		</div>
	</section>
	<hr>
	<!-- /.2nd-news-section-close -->


	@php
	$sixCat=DB::table('categories')->skip(1)->first();
	$sixpost=DB::table('posts')->whereNotNull('dist_id')->orderBy('id','DESC')->first();
	$sixpostfirstSection=DB::table('posts')->whereNotNull('dist_id')->skip(1)->orderBy('id','DESC')->limit(3)->get();
	$sixpostsecondSection=DB::table('posts')->whereNotNull('dist_id')->skip(4)->orderBy('id','DESC')->limit(3)->get();
	@endphp
	<!-- 3rd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<div class="cetagory-title-02"><a href="#">
						@if(session()->get('lang')== 'english')
						 <b>	{{$sixCat->category_en}}</b>
							@else
							<b>{{$sixCat->category_bn}}</b>
							 @endif
					
						{{-- সারাদেশে  --}}
						
						<a href="{{url::to('post/'.$sixCat->id.'/'.$sixCat->category_bn)}}">
							<span>
							   @if(session()->get('lang')== 'english')
							   More 
							   @else
							   আরও 
								@endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
					
					<div class="row">
						<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
							@php
								$dist=DB::table('districts')->get();
							@endphp


						<form action="{{route('sharadesh.news')}}"  method="get">
							@csrf

							<div class="row">
								<div class="col-lg-4">
									<select class="form-control" name="dist_id" id="dist_id">
                                 <option > ==Choose One==</option>
								 @foreach ($dist as $row)
								 <option value="{{$row->id}}">{{$row->district_bn}}</option>
								 @endforeach

									</select>
								</div>
								<div class="col-lg-4">
									<select class="form-control" name="subdist_id" id="subdist_id">
										<option > ==Choose One==</option>
	   
										   </select>
								</div>
								<div class="col-lg-4">
									<button type="submit" class="btn btn-success btn-block" >
										@if(session()->get('lang')== 'english')
									Submit
										@else
										খুঁজুন
										 @endif
									
									</button>
								</div>
							</div>
						</form>
						<div class="col-md-4 col-sm-4">
							<div class="top-news">
								@php
								$slug=preg_replace('/\s+/u', '-',trim($sixpost->title_bn) );
								@endphp
								<a href="{{URL::to('view-post/'.$sixpost->id.'/'.$slug)}}"><img src="{{asset($sixpost->image_first)}}" alt="Notebook"></a>
								<h4 class="heading-02"><a href="{{URL::to('view-post/'.$sixpost->id.'/'.$slug)}}">

									@if(session()->get('lang')== 'english')
									{{$sixpost->title_en}} 
									@else
									<b>
									 {{$sixpost->title_bn}}</b>
									 @endif
									
									</a> </h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">

							@foreach($sixpostfirstSection as  $row)
						     	@php
								$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
								@endphp
							<div class="image-title">
							<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
					 @if(session()->get('lang')== 'english')
						{{$row->title_en}}
						@else
						<b>
						 {{$row->title_bn}}</b>
						 @endif
							</a>
							 </h4>
							</div>
							 @endforeach
							
						</div>
						<div class="col-md-4 col-sm-4">
							@foreach($sixpostsecondSection as  $row)
						     	@php
								$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
								@endphp
							<div class="image-title">
							<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
								<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
					 @if(session()->get('lang')== 'english')
						{{$row->title_en}}
						@else
						<b>
						 {{$row->title_bn}}</b>
						 @endif
							</a>
							 </h4>
							</div>
							 @endforeach
						</div>
					</div>

					
					<!-- ******* -->
					<br />






	<!-- ******* -->
	@php
	$sevenCat=DB::table('categories')->skip(7)->first();
	$sevenpost=DB::table('posts')->where('cat_id',$sevenCat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
	$sevenpostsmail=DB::table('posts')->where('cat_id',$sevenCat->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
	@endphp

	 <div class="row">
		<div class="col-md-6 col-sm-6">
			<div class="bg-one">
				<div class="cetagory-title-02"><a href="#">
					
					@if(session()->get('lang')== 'english')
				 <b>	{{$sevenCat->category_en}}</b>
					@else
					<b>{{$sevenCat->category_bn}}</b>
					 @endif
					
					 <a href="{{url::to('post/'.$sevenCat->id.'/'.$sevenCat->category_bn)}}">
						<span>
						   @if(session()->get('lang')== 'english')
						   More 
						   @else
						   আরও 
							@endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="top-news">
							@php
							$slug=preg_replace('/\s+/u', '-',trim($sevenpost->title_bn) );
							@endphp
							<a href="{{URL::to('view-post/'.$sevenpost->id.'/'.$slug)}}"><img src="{{asset($sevenpost->image_first)}}" alt="Notebook"></a>
							<h4 class="heading-02"><a href="{{URL::to('view-post/'.$sevenpost->id.'/'.$slug)}}">

								@if(session()->get('lang')== 'english')
								{{$sevenpost->title_en}}
								@else
								<b>
								 {{$sevenpost->title_bn}}</b>
								 @endif
							
							</a> </h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						@foreach($sevenpostsmail as  $row)
						<div class="image-title">
							@php
							$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
							@endphp
						<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
				 @if(session()->get('lang')== 'english')
					{{$row->title_en}}
					@else
					<b>
					 {{$row->title_bn}}</b>
					 @endif
						</a>
						 </h4>
						</div>
						 @endforeach
						
					</div>
				</div>
			</div>
		</div>

		@php
		$eightCat=DB::table('categories')->skip(6)->first();
		$eightpost=DB::table('posts')->where('cat_id',$eightCat->id)->where('big_thumbnail',1)->orderBy('id','DESC')->first();
		$eightpostsmail=DB::table('posts')->where('cat_id',$eightCat->id)->where('big_thumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
		@endphp

		<div class="col-md-6 col-sm-6">
			<div class="bg-one">
				<div class="cetagory-title-02"><a href="#">
					
					@if(session()->get('lang')== 'english')
				 <b>	{{$eightCat->category_en}}</b>
					@else
					<b>{{$eightCat->category_bn}}</b> 
					 @endif
					
					 <a href="{{url::to('post/'.$eightCat->id.'/'.$eightCat->category_bn)}}">
						<span>
						   @if(session()->get('lang')== 'english')
						   More 
						   @else
						   আরও 
							@endif<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="top-news">
							@php
							$slug=preg_replace('/\s+/u', '-',trim($eightpost->title_bn) );
							@endphp
							<a href="{{URL::to('view-post/'.$eightpost->id.'/'.$slug)}}"><img src="{{asset($eightpost->image_first)}}" alt="Notebook"></a>
							<h4 class="heading-02"><a href="{{URL::to('view-post/'.$eightpost->id.'/'.$slug)}}">

								@if(session()->get('lang')== 'english')
								{{$eightpost->title_en}}
								@else
								<b>
								 {{$eightpost->title_bn}}</b>
								 @endif
							
							</a> </h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						@foreach($eightpostsmail as  $row)
						<div class="image-title">
							@php
							$slug=preg_replace('/\s+/u', '-',trim($row->title_bn) );
							@endphp
						<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{asset($row->image_first)}}" alt="Notebook"></a>
							<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
				 @if(session()->get('lang')== 'english')
					{{$row->title_en}}
					@else
					<b>
					 {{$row->title_bn}}</b>
					 @endif
						</a>
						 </h4>
						</div>
						 @endforeach
						
					</div>
				</div>
			</div>
		</div>
	</div> 
	<!-- add-start -->	












					<div class="row">
						<div class="col-md-12 col-sm-12">
							@php
								  $horizontal2=DB::table('ads')->where('type',2)->skip(1)->orderBY('id','ASC')->first();
							@endphp
					
							<div class="add">
@if($horizontal2==NULL)
@else
<a href="{{ $horizontal2->link}}"  target="_blank" ><img src="{{asset($horizontal2->ads)}}" alt="" /></a>
@endif

							
							</div>
						</div>
					</div><!-- /.add-close -->	


				</div>
				<div class="col-md-3 col-sm-3">
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
						{{-- @php
						$slug=preg_replace('/\s+/u', '-',trim($latest->title_bn) );
						// dd($slug);
					@endphp
						 --}}
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






					<!-- Namaj Times -->
						@php
						$namaz=DB::table('prayer')->first();
						@endphp
					<div class="cetagory-title-03">
						@if (session()->get('lang')=='english')
							Prayer Time
						@else
						নামাজের সময়সূচি
						@endif
					 </div>

					 <table class="table table-striped">
						 <tr>
							 <th> @if (session()->get('lang')=='english')	Fajor @else ফজর @endif </th>
							 <th>  @if (session()->get('lang')=='english'){{$namaz->fajr}} @else{{$namaz->fajr}} @endif</th>
						 </tr>
						 <tr>
							<th> @if (session()->get('lang')=='english')	dhuhr @else জোহার @endif </th>
							<th>  @if (session()->get('lang')=='english'){{$namaz->dhuhr}} @else{{$namaz->dhuhr}} @endif</th>
						</tr>
						<tr>
							<th> @if (session()->get('lang')=='english')	asr @else আসর @endif </th>
							<th>  @if (session()->get('lang')=='english'){{$namaz->asr}} @else{{$namaz->asr}} @endif</th>
						</tr>
						<tr>
							<th> @if (session()->get('lang')=='english')	maghrib @else মাগরিব @endif </th>
							<th>  @if (session()->get('lang')=='english'){{$namaz->maghrib}} @else{{$namaz->maghrib}} @endif</th>
						</tr>
						<tr>
							<th> @if (session()->get('lang')=='english')	isha @else ঈশা @endif </th>
							<th>  @if (session()->get('lang')=='english'){{$namaz->isha}} @else{{$namaz->isha}} @endif</th>
						</tr>
					
					 </table>

					
					                            
												

					<!-- Namaj Times -->
					<div class="cetagory-title-03">পুরানো সংবাদ  </div>
					<form action="" method="post">
						<div class="old-news-date">
						   <input type="text" name="from" placeholder="From Date" required="">
						   <input type="text" name="" placeholder="To Date">			
						</div>
						<div class="old-date-button">
							<input type="submit" value="খুজুন ">
						</div>
				   </form>

				  
				   <!-- news -->
				   <br><br><br><br><br>
				   

				
				   <div class="cetagory-title-04"> 
					@if (session()->get('lang')=='english')
				Imaportant Website 
					@else
					গুরুত্বপূর্ণ ওয়েবসাইট 
					@endif
				 </div>
				   <div class="">
					@php
						$website=DB::table('important_website')->get();
						 @endphp
						 <div class="news-titletab">
						 @foreach ($website as $raw) 
						 
				   	<div class="news-title-02">
					
				
						
				   		<h4 class="heading-03">  <a href="{{$raw->websiteName_link}}" target="_blank"><i class="fa fa-check" aria-hidden="true"></i>
							@if (session()->get('lang')=='english')
							{{$raw->websiteName_en}} 
								@else
								{{$raw->websiteName_bn}} 
								@endif
							 </a> </h4>
				   	</div>
					   @endforeach
				   	
				   </div>
				</div>

				</div>
			</div>
		</div>
	</section><!-- /.3rd-news-section-close -->
	


	


	


	<!-- gallery-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<div class="gallery_cetagory-title">
						@if (session()->get('lang')=='english')
						Photo Gallery 
					@else
					ফটো গ্যালারি
					@endif
					
					
					</div>
@php
	$photobig=DB::table('photos')->where('photo_type',0)->orderBy('id','DESC')->first();
	$photosmail=DB::table('photos')->where('photo_type',1)->orderBy('id','DESC')->limit(5)->get();
@endphp
					<div class="row">
	                    <div class="col-md-8 col-sm-8">
	                        <div class="photo_screen">
	                            <div class="myPhotos" style="width:100%">

                                      <img src="{{asset($photobig->photo)}}"  alt="Avatar">
									  <div class="heading-03">
										@if (session()->get('lang')=='english')
										{{$photobig->photo_title}}
											@else
											{{$photobig->photo_title}}
											@endif
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                        <div class="photo_list_bg">
	                            @foreach ( $photosmail as $raw)
									
						
	                            <div class="photo_img photo_border active">
	                                <img src="{{asset($raw->photo)}}" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
										@if (session()->get('lang')=='english')
										{{$raw->photo_title}}
											@else
											{{$raw->photo_title}}
											@endif
	                                </div>
	                            </div>

								@endforeach


	                          

	                        </div>
	                    </div>
	                </div>

	                <!--=======================================
                    Video Gallery clickable jquary  start
                ========================================-->

                            <script>
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                      showDivs(slideIndex += n);
                                    }

                                    function currentDiv(n) {
                                      showDivs(slideIndex = n);
                                    }

                                    function showDivs(n) {
                                      var i;
                                      var x = document.getElementsByClassName("myPhotos");
                                      var dots = document.getElementsByClassName("demo");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                         x[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                      }
                                      x[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " w3-opacity-off";
                                    }
                                </script>

                <!--=======================================
                    Video Gallery clickable  jquary  close
                =========================================-->
				@php
				$videobig=DB::table('videos')->where('video_type',1)->orderBy('id','DESC')->first();
				$videosmail=DB::table('videos')->where('video_type',0)->orderBy('id','DESC')->limit(5)->get();
			@endphp
				</div>
				<div class="col-md-4 col-sm-5">
					<div class="gallery_cetagory-title">
						
						@if (session()->get('lang')=='english')
						Video Gallery 
						@else
						ভিডিও গ্যালারি
						@endif
				  </div>

					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="video_screen">
                                <div class="myVideos" style="width:100%">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="853" height="380" src="https://www.youtube.com/embed/{{$videobig->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="gallery_sec owl-carousel">
								@foreach ( $videosmail as $raw)
	
 <div class="video_image" style="width:100%" onclick="currentDivs(1)">
									<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="200" height="140" src="https://www.youtube.com/embed/{{$raw->video}}"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
                                </div>
								@endforeach
                             
                             

                            </div>
                        </div>
                    </div>


                    <script>
                        var slideIndex = 1;
                        showDivss(slideIndex);

                        function plusDivs(n) {
                          showDivss(slideIndex += n);
                        }

                        function currentDivs(n) {
                          showDivss(slideIndex = n);
                        }

                        function showDivss(n) {
                          var i;
                          var x = document.getElementsByClassName("myVideos");
                          var dots = document.getElementsByClassName("demo");
                          if (n > x.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = x.length}
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = "none";
                          }
                          for (i = 0; i < dots.length; i++) {
                             dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                          }
                          x[slideIndex-1].style.display = "block";
                          dots[slideIndex-1].className += " w3-opacity-off";
                        }
                    </script>

				</div>
			</div>
		</div>
	</section><!-- /.gallery-section-close -->


	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0" nonce="kCuYL19c"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			  $('select[name="dist_id"]').on('change', function(){
				  var dist_id = $(this).val();         
				  if(dist_id) {
					  $.ajax({
						  url: "{{url('/get/subdist/forntend')}}/"+dist_id,
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

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=251302696084561&autoLogAppEvents=1"></script>
@endsection


