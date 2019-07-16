<!doctype html>

<html class="no-js" lang="zxx">

<head>

    	<!-- metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       	<meta name="description" content="{{ $meta->description }}">
		<meta name="keywords" content="{{ $meta->keywords }}">

		<!-- title -->
		<title>{{ $meta->title }}</title>

		<!-- favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/png">

        <!-- bootstrap css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

		<!-- google fonts -->
		<link href="{{ asset('fonts/css3ce6.css?family=Montserrat:200,300,400,500,600,700,800,900') }}" rel="stylesheet">
		<link href="{{ asset('fonts/css3f91.css?family=Poppins:200,300,400,500,600,700,800') }}" rel="stylesheet">

		<!-- owl carousel CSS -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

		<!-- magnific-popup CSS -->
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

		<!-- animate.min CSS -->
		<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

		<!-- Font Icon Core CSS -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/et-line.css') }}">

		<!-- Core Style Css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!--[if lt IE 9]-->
		<script src="{{ asset('js/html5shiv.min.js') }}"></script>
		<!--[endif]-->

    </head>

    <body>

    	<!-- ====== Preloader ======  -->
	    <div class="loading">
			<div class="load-circle">
			</div>
		</div>
		<!-- ======End Preloader ======  -->

		<!-- ====== Navgition ======  -->
		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-icon-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		       <!-- logo -->
		      <a class="logo" href="#">{{ $header->name }}</a>

		    </div>

		    <!-- Collect the nav links, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="nav-icon-collapse">

			  <!-- links -->
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#" data-scroll-nav="0" class="active">Home</a></li>
		        <li><a href="#" data-scroll-nav="1">About</a></li>
		        <li><a href="#" data-scroll-nav="2">Services</a></li>
		        <li><a href="#" data-scroll-nav="3">Works</a></li>
		        <li><a href="#" data-scroll-nav="4">Clients</a></li>
		        <li><a href="#" data-scroll-nav="5">Blog</a></li>
		        <li><a href="#" data-scroll-nav="6">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
		<!-- ====== End Navgition ======  -->

		<!-- ====== Header ======  -->
		<section id="home" class="header" data-scroll-index="0" style="background-image: url({{ asset('img').'/'.$header->background }});" data-stellar-background-ratio="0.8">

			<!-- particles -->
			<div id="particles-js"></div>

			<div class="v-middle">
				<div class="container">
					<div class="row">

						<!-- caption -->
						<div class="caption">
							<h5>Hello</h5>
							<h1 class="cd-headline clip">
					            <span class="blc">I Am </span>
					            <span class="cd-words-wrapper">
                        @foreach ($headtexts as $headtext)
                          @if ($headtext->id == '1')
                            <b class="is-visible">{{ $headtext->text }}</b>
                          @else
                            <b>{{ $headtext->text }}</b>
                          @endif
                        @endforeach
					            </span>
			          		</h1>
			          		<!-- social icons -->
			          		<div class="social-icon">
                      @foreach ($socials as $social)
                        <a href="{{ $social->link }}">
                          <span><i class="{{ $social->icon }}" aria-hidden="true"></i></span>
                        </a>
                      @endforeach
			          		</div>
						</div>
						<!-- end caption -->
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Header ======  -->

		<!-- ====== Hero ======  -->
		<section class="hero section-padding pb-70" data-scroll-index="1">
			<div class="container">
				<div class="row">

					<!-- hero image -->
					<div class="col-md-5">
						<div class="hero-img mb-30">
							<img src="{{ asset('img').'/'.$about->img }}" alt="">
						</div>
					</div>

					<!-- content -->
					<div class="col-md-7">
						<div class="content mb-30">
							<h3>About Me.</h3>
							<span class="sub-title">{{ $about->tagline }}</span>
							<p>{!! $about->body !!}</p>

							<!-- skills progress -->
							<div class="skills">
								@foreach ($skills as $skill)
								<div class="item">
										<div class="skills-progress">
											<h6>{{ $skill->name }}</h6>
											<span data-value="{{ $skill->percent }}%"></span>
										</div>
								</div>
								@endforeach
							</div>
							<div class="clearfix"></div>
							<a href="{{ $about->link }}" download>
								<span class="buton buton-bg">Download C.V</span>
							</a>
							<a href="#0" data-scroll-nav="6">
								<span class="buton">Contact Me</span>
							</a>
						</div>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Hero ======  -->

		<!-- ====== Services ======  -->
		<section class="services section-padding bg-gray text-center pb-70" data-scroll-index="2">
			<div class="container">
        <!-- section heading -->
        <div class="section-head">
          <h3>Services.</h3>
        </div>
				<div class="row">
          @foreach ($services as $service)
            <!-- items -->
  					<div class="col-md-4">
  						<div class="item">
  							<span class="icon"><i class="{{ $service->icon }}" aria-hidden="true"></i></span>
  							<h6>{{ $service->title }}</h6>
  							<p>{{ $service->body }}</p>
  						</div>
  					</div>
          @endforeach
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Services ======  -->

		<!--====== Portfolio ======-->
		<section class="portfolio section-padding pb-70" data-scroll-index="3">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Portfolio.</h3>
					</div>

					<!-- filter links -->
					<div class="filtering text-center mb-50">
						<span data-filter='*' class="active">All</span>
            @foreach ($categorys as $category)
              <span data-filter='.{{ $category->id }}'>{{ $category->name }}</span>
            @endforeach
					</div>

					<!-- gallery -->
					<div class="gallery text-center">

            @foreach ($portfolios as $portfolio)
						<!-- gallery item -->
						<div class="col-md-4 col-sm-6 items {{ $portfolio->category }}">
							<div class="item-img">
								<img src="{{ asset('img/portfolio').'/'.$portfolio->img }}" alt="image">
								<div class="item-img-overlay">
									<div class="overlay-info v-middle text-center">
										<h6 class="sm-titl">{{ $portfolio->name }}</h6>
										<div class="icons">
											<span class="icon">
												<a href="{{ $portfolio->link }}">
													<i class="fa fa-chain-broken" aria-hidden="true"></i>
												</a>
											</span>
											<span class="icon link">
												<a href="{{ asset('img/portfolio').'/'.$portfolio->img }}">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
            @endforeach


					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Portfolio ======-->

		<!--====== Clients ======-->
		<section class="clients section-padding bg-gray" data-scroll-index="4">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Testimonials.</h3>
					</div>

					<!-- owl carousel -->
					<div class="col-md-offset-1 col-md-10">
						<div class="owl-carousel owl-theme text-center">
              @foreach ($reviews as $review)
							<!-- citems -->
							<div class="citem">
								<div class="author-img">
									<img src="{{ asset('img/clients').'/'.$review->img }}" alt="">
								</div>
								<p>{{ $review->body }}</p>
								<h6>{{ $review->name }}</h6>
								<span>{{ $review->bio }}</span>
							</div>
              @endforeach
						</div>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End clients ======-->

		<!--====== Numbers ======-->
		<div class="numbers section-padding text-center pb-70">
			<div class="container">
				<div class="row">
					@foreach ($counters as $counter)
					<!-- items -->
					<div class="col-md-3">
						<div class="item">
							<span class="icon"><i class="{{ $counter->icon }}" aria-hidden="true"></i></span>
							<h3 class="counter">{{ $counter->number }}</h3>
							<p>{{ $counter->name }}</p>
						</div>
					</div>
					@endforeach
				</div><!-- /row -->
			</div><!-- /container -->
		</div>
		<!--====== End Numbers ======-->

		<!--====== Blog ======-->
		<section class="blog section-padding bg-gray" data-scroll-index="5">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Our Blog.</h3>
					</div>

					<!-- owl carsouel -->
					<div class="owl-carousel owl-theme">
						@foreach ($posts as $post)
						<!-- pitems -->
						<div class="pitem">
							<div class="post-img">
								<img src="{{ asset('img/blog').'/'.$post->img }}" alt="">
							</div>
							<div class="content">
								<h6 class="tag">
									@foreach ($postcategorys as $postcategory)
									@if ($postcategory->id == $post->category)
										<a href="{{ url('category',[$postcategory->id]) }}">{{ $postcategory->name }}</a>
									@endif
									@endforeach
								</h6>
								<h4>
									<a href="{{ url('post',[$post->slug]) }}">{{ $post->title }}</a>
								</h4>
								<span class="more">
									<a href="{{ url('post',[$post->slug]) }}">Read More</a>
								</span>
							</div>
						</div>
						@endforeach
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Blog ======-->

		<!--====== Contact ======-->
		<section class="contact section-padding" data-scroll-index="6">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Contact Us.</h3>
					</div>

					<div class="col-md-offset-1 col-md-10">

						<!-- contact info -->
						<div class="info text-center mb-50">

							<div class="col-md-4">
								<div class="item">
									<span class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
									<h6>Address</h6>
									<p>{!! $contact->address !!}</p>
								</div>
							</div>

							<div class="col-md-4">
								<div class="item">
									<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<h6>Email</h6>
									<p>{!! $contact->email !!}</p>
								</div>
							</div>

							<div class="col-md-4">
								<div class="item">
									<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
									<h6>Phone</h6>
									<p>{!! $contact->phone !!}</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<!-- contact form -->
						<form class="form" id="contact-form" method="post" action="{{ url('contact-form') }}">
							@csrf
		                    <div class="messages"></div>

		                    <div class="controls">

		                        <div class="row">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <input id="form_name" type="text" name="name" placeholder="Name" required="required">
		                                </div>
		                            </div>

		                             <div class="col-md-6">
		                                <div class="form-group">
		                                    <input id="form_email" type="email" name="email" placeholder="Email" required="required">
		                                </div>
		                            </div>
		                        </div>
		                        <div class="row">
		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
		                                </div>

		                                <input type="submit" value="Submit" class="buton buton-bg">
		                            </div>
		                        </div>
		                    </div>
		                </form>

					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Contact ======-->

		<!--====== Footer ======-->
		<footer>
			<div class="container text-center">
				<div class="row">
					<p>Copy Right 2018 &copy; By Daniels All Rights Reserved</p>
				</div>
			</div>
		</footer>
		<!--====== End Footer ======-->




        <!-- jQuery -->
		<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>

	  	<!-- bootstrap -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

		<!-- scrollIt -->
		<script src="{{ asset('js/scrollIt.min.js') }}"></script>

		<!-- magnific-popup -->
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

		<!-- owl carousel -->
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

		<!-- stellar js -->
		<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>

		<!-- animated.headline -->
		<script src="{{ asset('js/animated.headline.js') }}"></script>

      	<!-- jquery.waypoints.min js -->
	  	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>

	  	<!-- jquery.counterup.min js -->
	  	<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>

      	<!-- isotope.pkgd.min js -->
      	<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

      	<!-- particles.min js -->
      	<script src="{{ asset('js/particles.min.js') }}"></script>

      	<!-- app js -->
      	<script src="{{ asset('js/app1.js') }}"></script>

      	<!-- validator js -->
      	<script src="{{ asset('js/validator.js') }}"></script>

      	<!-- custom script -->
        <script src="{{ asset('js/custom.js') }}"></script>

    </body>

</html>
