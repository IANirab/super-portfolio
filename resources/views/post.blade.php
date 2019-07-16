@include('inc.header')
<style type="text/css">
span.icon.social-icon {
    color: white;
    width: 20px;
    text-align: center;
    border-radius: 2px;
}
span.facebook{
	background: #0f35ef;
}
span.twitter{
	background: #1da1f2;
}
span.linkedin{
	background: #2977c9;
}
</style>

		<!-- ====== Header ======  -->
		<section id="home" class="header" data-scroll-index="0" style="background-image: url({{ asset('img').'/'.$header->background }});height: 50vh !important;" data-stellar-background-ratio="0.8">

			<!-- particles -->
			<div id="particles-js"></div>

			<div class="v-middle">
				<div class="container">
					<div class="row">
						<!-- caption -->
						<div class="caption">
							<h4>{{ $post->title }}</h4>
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

						<!-- pitems -->
						<div class="col-sm-8">
						<div class="pitem">
							<div class="post-img">
								<img src="{{ asset('img/blog').'/'.$post->img }}" alt="">
							</div>
							<div class="content">
								<h6 class="tag">
									@foreach ($postcategorys as $postcategory)
									@if ($postcategory->id == $post->category)
										<a href="#0">{{ $postcategory->name }}</a>
									@endif
									@endforeach
								</h6>
								<h4>
									<a href="#0">{{ $post->title }}</a>
								</h4>
								<p>{!! $post->body !!}</p>
								<br>
								<p style="color:black;float: right;"><b>Posted on :</b> {{ date('F j, Y', strtotime($post->created_at)) }}</p>
								<p style="color:black;float: left;"><b>Share on &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</b>
									<a href="https://www.facebook.com/sharer.php?u=@php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; @endphp" target="_blank"><span class="icon social-icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>&nbsp;

									<a href="https://twitter.com/intent/tweet?url=@php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; @endphp" target="_blank"><span class="icon social-icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>&nbsp;

									<a href="https://www.linkedin.com/shareArticle?mini=true&url=@php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; @endphp" target="_blank"><span class="icon social-icon linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></span></a>&nbsp;

								</p>
								<br>
							</div>
						</div>
						</div>

						<!-- pitems -->
						<div class="col-sm-4">
						<div class="pitem">
							<div class="content">
								<div class="list-group">
								  <a class="list-group-item list-group-item-action active text-center">
								    Categories
								  </a>
								  @foreach ($postcategorys as $postcategory)
								   <a href="{{ url('category',[$postcategory->id]) }}" class="list-group-item list-group-item-action">{{ $postcategory->name }}
								   	</a>
								  @endforeach
								</div>
								<br>
							</div>
						</div>
						</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Blog ======-->

@include('inc.footer')