@include('inc.header')

		<!-- ====== Header ======  -->
		<section id="home" class="header" data-scroll-index="0" style="background-image: url({{ asset('img').'/'.$header->background }});height: 50vh !important;" data-stellar-background-ratio="0.8">

			<!-- particles -->
			<div id="particles-js"></div>

			<div class="v-middle">
				<div class="container">
					<div class="row">
						<!-- caption -->
						<div class="caption">
							<h5>Blog</h5>
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

		<!--====== Blog ======-->
		<section class="blog section-padding bg-gray" data-scroll-index="5">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Our Blog.</h3>
					</div>

						<!-- pitems -->
						@foreach ($posts as $post)
						<div class="col-sm-4">
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
						</div>
						@endforeach
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Blog ======-->

@include('inc.footer')