@extends('frontend.layouts.front')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
	@include('frontend.includes.front_home')
  	<!-- Features Box -->
	  <div class="section section-pad">
      		<div class="container">
      			<div class="row text-center">
					<div class="col-md-4 res-m-bttm-lg">
						<div class="box-alt box-dot box-direction box-direction-one">
							<div class="image-icon">
								<img src="{{asset('front/images/box-icon-i.png')}}" alt="box-icon">
							</div>
							<h5>register on Royal Real Investment</h5>
							<p>Download an app dolorts adipis sit ametcon sectetur.</p>
						</div>
					</div>
					<div class="col-md-4 res-m-bttm-lg">
						<div class="box-alt box-dot box-direction box-direction-two">
							<div class="image-icon">
								<img src="{{asset('front/images/box-icon-j.png')}}" alt="box-icon">
							</div>
							<h5>Invest</h5>
							<p>Once your wallet is  dolorts adipis sit ametcon sectetur.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-alt box-dot">
							<div class="image-icon">
								<img src="{{asset('front/images/box-icon-k.png')}}" alt="box-icon">
							</div>
							<h5>Receive daily ROI</h5>
							<p>The Process of sending dolorts adipis sit ametcon sectetur.</p>
						</div>
					</div>
				</div>
      		</div>
      	</div><!--End Features Box -->
       	
       	
       	<!--Section -->
       	<div class="section section-pad bg-grey">
       		<div class="container">
       			<div class="row row-vm reverses">
       				<div class="col-md-5 col-md-offset-1 res-m-bttm text-center">
       					<div class="round mgl--30 res-m-bttm"><img src="{{asset('front/images/illustration-md-a.png')}}" alt="photo-md"></div>
       				</div>
       				<div class="col-md-6">
						<div class="text-block">
							<h2>Powerful Year Round Investment System</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
							<p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
							<a href="#" class="btn btn-alt">Read More</a>
						</div>
       				</div>
       			</div>
       		</div>
       	</div>
       	<!--End Section -->
       	

      	
      <!-- Section -->
    	<div class="section section-pad cta-section light has-bg  darker-filter bg-primary">
    		<div class="imagebg has-parallax">
				<img src="{{asset('front/images/cta-bg.jpg')}}" alt="bg">
			</div>
    		<div class="container">
    			<div class="row text-center">
    				<div class="col-md-8 col-md-offset-2">
    					<h2>RRI Can Follow You Anywhere You Go</h2>
    					<p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias.</p>
    					<ul class="btns">
							<li><a class="btn-img" href="#"><img src="{{asset('front/images/android.png')}}" alt="android"></a></li>
							<li><a class="btn-img" href="#"><img src="{{asset('front/images/apple.png')}}" alt="apple"></a></li>
						</ul>
    				</div>
    			</div>
    		</div>
    	</div>
     	<!-- End Section -->
       	
       	<!--Section -->
       	<div class="section section-pad">
       		<div class="container">
       			<div class="section-head">
					<div class="row text-center">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<h2 class="heading-section">Why choose Us</h2>
							<p>Sed ut perspi ciatis unde omnis iste natus error sit volup tatem accusa ntium dolor emque lauda ntium, totam rem aperiam</p>
						</div>
					</div>
       			</div>
       			<div class="gaps size-3x"></div>
				<div class="row text-center row-vm">
					<div class="col-md-4 res-m-bttm-lg">
						<div class="box-alt">
							<span class="pe pe-7s-server"></span>
							<h4>Payment Options</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
						<div class="box-alt">
							<span class="pe pe-7s-note"></span>
							<h4>Legal Compliance</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
						<div class="box-alt">
							<span class="pe pe-7s-airplay"></span>
							<h4>Cross-Platform Trading</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
					</div>
					<div class="col-md-4 res-m-bttm-lg">
						<div class="box-alt">
							<span class="pe pe-7s-lock"></span>
							<h4>Strong Security</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
						<div class="box-alt img">
							<img src="{{asset('front/images/square-md-a.png')}}" alt="square">
						</div>
						<div class="box-alt">
							<span class="pe pe-7s-cash"></span>
							<h4>Competitive Commissions</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="box-alt">
							<span class="pe pe-7s-global"></span>
							<h4>World Coverage</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
						<div class="box-alt">
							<span class="pe pe-7s-graph"></span>
							<h4>Advanced Reporting</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
						<div class="box-alt">
							<span class="pe pe-7s-graph1"></span>
							<h4>Margin Trading</h4>
							<p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
						</div>
					</div>
				</div>
       		</div>
       	</div>
       	<!--End Section -->
       	
       	<!--Section -->
       	<div class="section section-pad bg-grey">
       		<div class="container">
       			<div class="row row-vm">
       				<div class="col-md-6">
						<div class="trendingview-chart res-m-bttm">
							<!-- TradingView Widget BEGIN -->
							<script src="https://s3.tradingview.com/tv.js"></script>
							<script>
							new TradingView.widget({
								"autosize":true,
								"symbol": "NASDAQ:AAPL",
								"interval": "60",
								"timezone": "Etc/UTC",
								"theme": "Light",
								"style": "1",
								"locale": "en",
								"toolbar_bg": "#f1f3f6",
								"enable_publishing": false,
								"allow_symbol_change": true,
								"hideideas": true
							});
							</script>
							<!-- TradingView Widget END -->
						</div>
       				</div>
       				<div class="col-md-5 col-md-offset-1 ">
						<div class="text-block">
							<h2>No Experience? <br/>No worries</h2>
							<p>Looking to get started in the world of cryptocurrency trading sit amet tristique?</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et lorem nec felis finibus laoreet. Nullam id dictum urna. Vestibulum in aliquam tellus, sit amet tristique ipsum. </p>
							<a href="#" class="btn btn-alt">get started</a>
						</div>
       				</div>
       			</div>
       		</div>
       	</div>
       	<!--End Section -->

       	<!--Section -->
       	<div class="section section-pad">
       		<div class="container">
       			<div class="section-head">
					<div class="row text-center">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<h2 class="heading-section">What investors say</h2>
							<p>Sed ut perspi ciatis unde omnis iste natus error sit volup tatem accusa ntium dolor emque lauda ntium, totam rem aperiam</p>
						</div>
					</div>
       			</div>
       			<div class="gaps size-3x"></div>
       			<div class="row text-center">
       				<div class="col-md-6 col-md-offset-3">
       					<div class="testimonial-carousel has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true">
       						<div class="testimonial-item">
       							<div class="client-photo circle">
       								<img src="{{asset('front/images/client-a.jpg')}}" alt="client">
       								<em class="fa fa-quote-right"></em>
       							</div>
       							<blockquote>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</blockquote>
       							<div class="client-info">
       								<h6>John Doe</h6>
       								<span>CEO, Company Name</span>
       							</div>
       						</div>
       						<div class="testimonial-item">
       							<div class="client-photo circle">
       								<img src="{{asset('front/images/client-a.jpg')}}" alt="client">
       								<em class="fa fa-quote-right"></em>
       							</div>
       							<blockquote>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</blockquote>
       							<div class="client-info">
       								<h6>John Doe</h6>
       								<span>CEO, Company Name</span>
       							</div>
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       	</div>
       	<!--End Section -->
       	
       	<!-- Section -->
		<div class="section section-pad-sm cta-small light">
			<div class="cta-block">
				<div class="container">
					<div class="row mobile-center">
						<div class="col-md-12">
							<div class="cta-sameline">
								<h3>Open account for free and start earning now!</h3>
								<a class="btn btn-outline btn-alt btn-md" href="{{url('register')}}">get started</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Section -->
      	
      	<!--Section -->
       	<div class="section section-pad">
       		<div class="container">
       			<div class="section-head">
					<div class="row text-center">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<h2 class="heading-section">our latest news</h2>
							<p>Sed ut perspi ciatis unde omnis iste natus error sit volup tatem accusa ntium dolor emque lauda ntium, totam rem aperiam</p>
						</div>
					</div>
       			</div>
       			<div class="gaps size-3x"></div>
       			<div class="row text-center">
       				<div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm-lg">
       					<div class="blog-post shadow round">
       						<div class="post-thumb"><a href="blog-single.html"><img src="{{asset('front/images/post-thumb-b.jpg')}}" alt="post"></a></div>
       						<div class="post-entry">
       							<div class="post-meta"><span>Posted 20 Aug, 2018</span></div>
       							<h5><a href="blog-single.html">Working Hard to Keep Pace with very heigh Demand</a></h5>
       							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore.</p>
       							<a href="blog-single.html" class="btn-icon"><span class="pe pe-7s-angle-right"></span></a>
       						</div>
       					</div>
       				</div>
       				<div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm-lg">
       					<div class="blog-post shadow round">
       						<div class="post-thumb"><a href="blog-single.html"><img src="{{asset('front/images/post-thumb-b.jpg')}}" alt="post"></a></div>
       						<div class="post-entry">
       							<div class="post-meta"><span>Posted 18 Aug, 2018</span></div>
       							<h5><a href="blog-single.html">RRI biggest deal on from today</a></h5>
       							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore.</p>
       							<a href="blog-single.html" class="btn-icon"><span class="pe pe-7s-angle-right"></span></a>
       						</div>
       					</div>
       				</div>
       				<div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm-lg">
       					<div class="blog-post shadow round">
       						<div class="post-thumb"><a href="blog-single.html"><img src="{{asset('front/images/post-thumb-c.jpg')}}" alt="post"></a></div>
       						<div class="post-entry">
       							<div class="post-meta"><span>Posted 17 Aug, 2018</span></div>
       							<h5><a href="blog-single.html">Introducing our new payment services...</a></h5>
       							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi dunt ut labore.</p>
       							<a href="blog-single.html" class="btn-icon"><span class="pe pe-7s-angle-right"></span></a>
       						</div>
       					</div>
       				</div>
       			</div>
       		</div>
       	</div>
       	<!--End Section -->
      	
       
@endsection
