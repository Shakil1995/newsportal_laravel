@php
	$category=DB::table('categories')->orderBY('id','ASC')->get();
	$seo=DB::table('seos')->first();
	$social=DB::table('socials')->first();
	$setting=DB::table('website_setting')->first();

@endphp


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="{{$seo->alexa_analytics}}" >
		<meta  name="author" content="{{$seo->meta_author}}">
		<meta  name="keyword" content="{{$seo->meta_keyword}}">
		<meta  name="description" content="{{$seo->meta_title}}">
		<meta  name="google_verification" content="{{$seo->google_verification}}">
		<meta  name="google_analytics" content="{{$seo->google_analytics}}">

		 <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('meta')

        <title>{{$seo->meta_title}}</title>
        <link href="{{asset('public/frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/assets/css/menu.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/assets/css/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/assets/css/responsive.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/assets/css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/assets/style.css')}}" rel="stylesheet">
    </head>
    <body class=" d-flex justify-content-center ">

   	 @php
    function bn_date($str)
        {
         $en = array(1,2,3,4,5,6,7,8,9,0);
        $bn = array('১','২','৩','৪','৫','৬','৭','৮','৯','০');
        $str = str_replace($en, $bn, $str);
        $en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
        $en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
        $bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );
        $str = str_replace( $en, $bn, $str );
        $str = str_replace( $en_short, $bn, $str );
        $en = array('Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
         $en_short = array('Sat','Sun','Mon','Tue','Wed','Thu','Fri');
         $bn_short = array('শনি', 'রবি','সোম','মঙ্গল','বুধ','বৃহঃ','শুক্র');
         $bn = array('শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
         $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( 'am', 'pm' );
        $bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );
        $str = str_replace( $en, $bn, $str );
         $str = str_replace( $en_short, $bn_short, $str );
         $en = array( '১২', '২৪' );
        $bn = array( '৬', '১২' );
        $str = str_replace( $en, $bn, $str );
         return $str;
        }
@endphp







    <!-- header-start -->
	<section class="hdr_section">
		<div class="container-fluid">			
			<div class="row">
				<div class="col-xs-6 col-md-2 col-sm-4">
					<div class="header_logo">
						<a href="{{URL::to('/')}}"><img src=" {{asset('public/frontend/assets/img/demo_logo.png')}}"></a> 
					</div>
				</div>              
				<div class="col-xs-6 col-md-8 col-sm-8">
					<div id="menu-area" class="menu_area">
						<div class="menu_bottom">
							<nav role="navigation" class="navbar navbar-default mainmenu">
						<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<!-- Collection of nav links and other content for toggling -->
								<div id="navbarCollapse" class="collapse navbar-collapse" >
									<ul class="nav navbar-nav" style="font-size: 10px;">
										
										@foreach ($category as $raw)
										@php
											$subCategory=DB::table('subcategories')->where('category_id',$raw->id) ->get();
										@endphp
										
									
											<li class="dropdown">

												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												@if (session()->get('lang')=='english')
												{{$raw->category_en}} 
												@else
												{{$raw->category_bn}} 
												@endif
												
												
												</a>
											<ul class="dropdown-menu">
												@foreach ($subCategory as $row)
												<li><a href="{{url::to('posts/'.$row->id.'/'.$row->subcategory_bn)}}">

													@if (session()->get('lang')=='english')
													{{$row->subcategory_en}} 
													@else
													{{$row->subcategory_bn}} 
													@endif
													{{-- {{$raw->subcategory_en}} --}}
													</a></li>
												@endforeach
											</ul>
											</li>
											@endforeach
									
										
									
									</ul>
								</div>
							</nav>											
						</div>
					</div>					
				</div> 
				<div class="col-xs-12 col-md-2 col-sm-12">
					<div class="header-icon">
						<ul>
							<!-- version-start -->
  
							@if (session()->get('lang')=='english')
							<li class="version"><a href="{{route('lang.bangla')}}">বাংলা</a></li>
							@else
							<li class="version"><a href="{{route('lang.english')}}">English</a></li>
							@endif
					
							<!-- login-start -->
						
							<!-- search-start -->
							<li><div class="search-large-divice">
								<div class="search-icon-holder"> <a href="#" class="search-icon" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-search" aria-hidden="true"></i></a>
									{{-- <div class="modal fade bd-example-modal-lg" action="<?php echo home_url( '/' ); ?>" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;"> --}}
										<div class="modal fade bd-example-modal-lg" action="" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"> <i class="fa fa-times-circle" aria-hidden="true"></i> </button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-md-12">
															<div class="custom-search-input">
																<form>
																	<div class="input-group">
																		<input class="search form-control input-lg" placeholder="search" value="Type Here.." type="text">
																		<span class="input-group-btn">
																		<button class="btn btn-lg" type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
																	</span> </div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div></li>
							<!-- social-start -->
							<li>
								<div class="dropdown">
								  <button class="dropbtn-02"><i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
								  <div class="dropdown-content">
									<a href="{{$social->facebook}}"  target="_blank" ><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
									<a href="{{$social->twitter}}"  target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
									<a href="{{$social->youtube}}"  target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> Youtube</a>
									<a href="{{$social->instagram}}"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
									<a href="{{$social->linkedin}}"  target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a>
								  </div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.header-close -->
	
    <!-- top-add-start -->
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
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
				</div>
			</div>
		</div>
	</section> <!-- /.top-add-close -->
	
	<!-- date-start -->
    <section>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-12 col-sm-12">
					<div class="date">
						<ul>
							<script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>
								 @if(session()->get('lang')== 'english')
								Dhaka 
								@else
								ঢাকা 
								 @endif </li>
							<li><i class="fa fa-calendar" aria-hidden="true"></i> 
								@if(session()->get('lang')== 'english')
							{{date('d M Y, l, h:i:s a')}}  
							@else
							{{ bn_date(date('d M Y, l, h:i:s a'))}}  
							 @endif
							 </li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i>
								@if(session()->get('lang')== 'english')
							Updated 5 minutes ago
							@else
						আপডেট ৫ মিনিট আগে
							 @endif 
								
								</li>
						</ul>
						
					</div>
				</div>
    		</div>
    	</div>
    </section><!-- /.date-close -->  

	<!-- notice-start -->
	@php
		$headline=DB::table('posts')
		->join('categories','posts.cat_id','categories.id')
		->join('subcategories','posts.subcat_id','subcategories.id')
		->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
		->where('posts.headline',1)
		->orderBy('id','DESC')
		->limit(5)
		->get();

		$notice=DB::table('notices')->first();
	@endphp 

    <section>
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01 ">
					@if(session()->get('lang')== 'english')
					Headline  :
					@else
					শিরোনাম :
					 @endif
				
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">
					<marquee>
						@foreach ($headline as $raw )
						@if(session()->get('lang')== 'english')
						{{$raw->title_en}} ||
						@else
						{{$raw->title_bn}} ||
						 @endif
						@endforeach
					
						</marquee>
				</div>
			</div>
    	</div>
    </section>     
	@if ($notice->status==1)
	<section>
    	<div class="container-fluid">
			<div class="row scroll">
				<div class="col-md-2 col-sm-3 scroll_01  ">
					@if(session()->get('lang')== 'english')
					Notices  :
					@else
					নোটিশস :
					 @endif
				
				</div>
				<div class="col-md-10 col-sm-9 scroll_02">
					<marquee>
				
						@if(session()->get('lang')== 'english')
						{{$notice->notice}} ||
						@else
						{{$notice->notice}} ||
						 @endif
				
					
						</marquee>
				</div>
			</div>
    	</div>
    </section> 
	@endif
 

	@yield('content')
	
	
	<!-- top-footer-start -->
	<section>
		<div class="container-fluid">
			<div class="top-footer">
				<div class="row">
					<div class="col-md-3 col-sm-4">
						<div class="foot-logo">
							<img src="{{asset('public/frontend/assets/img/demo_logo.png')}}" style="height: 50px;" />
						</div>
					</div>
					<div class="col-md-6 col-sm-4">
						 <div class="social">
                            <ul>
                                <li><a href="{{$social->twitter}}" target="_blank" class="facebook"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$social->twitter}}" target="_blank" class="twitter"> <i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$social->twitter}}" target="_blank" class="instagram"> <i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{$social->twitter}}" target="_blank" class="android"> <i class="fa fa-android"></i></a></li>
                                <li><a href="{{$social->twitter}}" target="_blank" class="linkedin"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="{{$social->twitter}}" target="_blank" class="youtube"> <i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
					</div>
					<div class="col-md-3 col-sm-4">
						<div class="apps-img">
							<ul>
								<li><a href="#"><img src="{{asset('public/frontend/assets/img/apps-01.png')}}" alt="" /></a></li>
								<li><a href="#"><img src="{{asset('public/frontend/assets/img/apps-02.png')}}" alt="" /></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.top-footer-close -->
	
@php
		$footarcategory=DB::table('categories')->orderBY('id','ASC')->limit(5)->get();
@endphp

	<!-- middle-footer-start -->	
	<section class="middle-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="editor-one">
						@if(session()->get('lang')== 'english')
						{!!$setting->site_address_en!!}
						@else
						{!!$setting->site_address_bn!!}
						 @endif
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-two">
<ul>
	@foreach ($footarcategory as $row)
	<li>
		@if (session()->get('lang')=='english')
		<a href="">{{$row->category_en}} </a>
		
		@else
		<a href="">{{$row->category_bn}} </a>
		@endif
	</li>
	@endforeach
</ul>
					

					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="editor-three">
						@if(session()->get('lang')== 'english')
						{{$setting->site_email}} <br>
						{{$setting->site_phone_en}}
						@else
						{{$setting->site_email}} <br>
						{{$setting->site_phone_bn}}
						 @endif
				
					</div>
				</div>
			</div>
		</div>
	</section><!-- /.middle-footer-close -->
	
	<!-- bottom-footer-start -->	
	<section class="bottom-footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="copyright">						
						All rights reserved © 2020 <a href="{{'https://www.facebook.com/profile.php?id=100004262354257'}} " target="_blank">Nurul Amin Shakil</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="btm-foot-menu">
						<ul>
							<li><a href="#">About US</a></li>
							<li><a href="#">Contact US</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	
	
	
	
		<script src=" {{asset('public/frontend/assets/js/jquery.min.js')}} "></script>
		<script src=" {{asset('public/frontend/assets/js/bootstrap.min.js')}}"></script>
		<script src=" {{asset('public/frontend/assets/js/main.js')}}"></script>
		<script src="{{asset('public/frontend/assets/js/owl.carousel.min.js')}}"></script>
	</body>
</html> 