<!DOCTYPE html>
<html>
<head>
<title>index</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Obdurate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<!--script-->
<script src="{{asset('js/jquery.chocolat.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8">
	<!--light-box-files-->
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.banner-bottom-grd a').Chocolat();
	});
</script>

<!--script-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- header-nav -->
	<div class="header-nav">
		<div style="margin-left:103px;float: left">
			<img src="{{asset('images/logo.png')}}" id="logoo" alt="" width="150px">
		</div>
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">

				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand" href="index.html">勇敢说爱，快乐脱单<span>我们用心服务专业</span></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">首页</a></li>
						<li><a href="{{url('/homeabout/index')}}">关于</a></li>
						<li><a href="{{url('/homemember/index')}}">会员</a></li>
						<li><a href="{{url('homeserver/index')}}">服务</a></li>
						<li><a href="{{url('homestory/index')}}">love story</a></li>
						<li><a href="{{url('homecontact/index')}}">联系我们</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->

				<!-- search -->
				<div class="head-right">
					<div id="sb-search" class="sb-search">
						<!-- <form>
							<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form> -->
					</div>
				</div>
				<!-- //search -->
					<!--search-scripts-->
						<script src="{{asset('js/classie.js')}}"></script>
						<script src="{{asset('js/uisearch.js')}}"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
					<!--//search-scripts-->
			</nav>
		</div>
	</div>
<!-- //header-nav -->
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner-info">
				<h3>认真科学谈恋爱，幸福长久过一生</h3>
				<p>但在某些情况下其职责的需要，经常会出现的乐趣已经被否定，或避免乐趣和烦恼的一些事情还没有被接受。</p>
				<div class="more">
					<a href="#" class="hvr-wobble-skew">学到更多</a>
				</div>
				<div class="banner-info-pos">
					<a href="#testimonials" class="scroll"></a>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费网站模板</a></div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="banner-bottom-grids">
				<div class="col-md-6 banner-bottom-grid-left">
					<h3><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>我们是谁</h3>
					<h1>南昌万家囍婚恋交友网是由一批婚恋专家，网络专家精心打造的。专为南昌地区有婚恋交友需求的单身人士服务的，专业正规的交友网站。主创团队在花费数年时间仔细研究，比较国内外多种婚恋服务后，取其精华，去其糟粕。并创造性地加入了一些本网站独有的元素，逐渐形成了现在这个克服了网络交友种种弊端的“安全高效”的交友平台。我们经过仔细研究，发现大众对于网络交友主要存在以下顾虑，我们针对大家的担心，提出了相应的，积极的对策，力求给您提供最满意的服务。</h1>
					<!-- <p>但在某些情况下其职责的需要，经常会出现的乐趣已经被否定，或避免乐趣和烦恼的一些事情还没有被接受。</p> -->
					<div class="banner-bottom-grid-left-grids">
						<div class="sliderfig">
							<ul id="flexiselDemo1">
								<li>
									<div class="banner-bottom-grid-left-grid">
										<h3>以<span>诚信</span> 领导</h3>
									</div>
								</li>
								<li>
									<div class="banner-bottom-grid-left-grid color-1">
										<h3>专注于

										<span>我们的</span>客户</h3>
									</div>
								</li>
								<li>


									<div class="banner-bottom-grid-left-grid color-2">
										<h3>高<span>品质的</span> 产品</h3>
									</div>
								</li>
							</ul>
						</div>
							<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: {
										portrait: {
											changePoint:480,
											visibleItems: 1
										},
										landscape: {
											changePoint:640,
											visibleItems:3
										},
										tablet: {
											changePoint:768,
											visibleItems: 3
										}
									}
								});

							});
					</script>
					<script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>
					</div>
				</div>
				<div class="col-md-6 banner-bottom-grid-right">
					@foreach($server_data as $key => $val)
					<div class="col-md-6 banner-bottom-grid-left1">
						@foreach($val as $k => $v)
						<div class="banner-bottom-grd">
							<a href="{{asset($v['column_url'])}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
								<img src="{{asset($v['column_url'])}}" alt=" " class="img-responsive" />
								<div class="textbox">
									<h4>{{$v['column_name']}}</h4>
									<p>{{$v['column_desc']}}</p>
								</div>
							</a>
						</div>
						@endforeach
						<!-- <div class="banner-bottom-grd">
							<a href="{{asset('images/71.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
								<img src="{{asset('images/71.jpg')}}" alt=" " class="img-responsive" />
								<div class="textbox">
									<h4>精准推荐</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>
						</div> -->
					</div>
					@endforeach
					<!-- <div class="col-md-6 banner-bottom-grid-left1 grid2">
						<div class="banner-bottom-grd">
							<a href="{{asset('images/72.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
								<img src="{{asset('images/72.jpg')}}" alt=" " class="img-responsive" />
								<div class="textbox">
									<h4>线下门店</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>
						</div>
						<div class="banner-bottom-grd">
							<a href="{{asset('images/74.jpg')}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
								<img src="{{asset('images/74.jpg')}}" alt=" " class="img-responsive" />
								<div class="textbox">
									<h4>专业服务</h4>
									<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit.</p>
								</div>
							</a>
						</div>
					</div> -->
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- banner1 -->
		<div class="container">
			<div class="wmuSlider example1">
			    <div class="wmuSliderWrapper">
			    	@foreach($story_data as $key => $val)
					<article style="position: absolute; width: 100%; opacity: 0;">
						<div class="banner-wrap">
							<div class="banner1-info">
								<div class="col-md-7 banner1-info-left">
									<h2>{{$val['story_title']}}</h2>
									<p>{{$val['story_desc']}}</p>
									<!-- <h4>Arun Duttha <span></span></h4> -->
								</div>
								<div class="col-md-5 banner1-info-right">
									<img width="300" height="250" src="{{asset($val['img'])}}" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</article>
					@endforeach
				</div>
			</div>
					<script src="{{asset('js/jquery.wmuSlider.js')}}"></script>
					  <script>
						$('.example1').wmuSlider();
					 </script>
		</div>
	</div>
<!-- //banner1 -->
<!-- banner1-bottom -->
	<div class="banner1-bottom">
		<div class="container">
			<div class="banner1-bottom-grids">
				<div class="col-md-2 banner1-bottom-grids1">
					<h3 title="{{$active_data[0]['active_id']}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					{{$active_data[0]['active_title']}}
					</h3>
				</div>
				<div class="col-md-2 banner1-bottom-grids1 banner1-bottom-grids1-color">
					<h3 title="{{$active_data[1]['active_id']}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{$active_data[1]['active_title']}}</h3>
				</div>
				<div class="col-md-2 banner1-bottom-grids1 banner1-bottom-grids1-color1">
					<h3 title="{{$active_data[2]['active_id']}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{$active_data[2]['active_title']}}</h3>
				</div>
				<div class="col-md-2 banner1-bottom-grids1 banner1-bottom-grids1-color2">
					<h3 title="{{$active_data[3]['active_id']}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{$active_data[3]['active_title']}}</h3>
				</div>
				<div class="col-md-2 banner1-bottom-grids1 banner1-bottom-grids1-color3">
					<h3 title="{{$active_data[4]['active_id']}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{$active_data[4]['active_title']}}</h3>
				</div>
				<div class="col-md-2 banner1-bottom-grids1 banner1-bottom-grids1-color4">
					<h3 title="{{$active_data[5]['active_id']}}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>{{$active_data[5]['active_title']}}</h3>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner1-bottom -->
<!-- newsletter -->
	<!-- <div class="newsletter">
		<div class="container">
			<div class="newsletter-left">
				<span></span>
			</div>
			<div class="newsletter-right">
				<h3>通讯<span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span></h3>
				<p>要不然他忍受痛苦，以确保其他更大的乐趣极其痛苦万分。因此，这些问题到这一点，他是束缚。</p>
				<form>
					<input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}" required="">
					<input type="submit" value="注册">
					<div class="clearfix"> </div>
				</form>
			</div>
			<div class="clearfix"> </div>
			<div class="call-us">
				<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
				<h3>联系我们:<span>+0809 657 890</span></h3>
			</div>
		</div>
	</div> -->
<!-- //newsletter -->
<!-- testimonials -->
	<div class="testimonials" id="testimonials">
		<div class="container">
			<h3><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>褒奖</h3>
			<div class="testimonials-grids">
				<div class="col-md-6 testimonials-grid">
					<div class="col-md-8 testimonials-grd">
						<div class="testimonials-grid1">
							<h4>Dollyfrick <span>工程师</span></h4>
							<p>有没有恼人的后果谁避免产生不产生快感痛苦的快感，或者一个</p>
						</div>
					</div>
					<div class="col-md-4 testimonials-grd-right">
						<img src="{{asset('images/6.png')}}" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 testimonials-grid">
					<div class="col-md-4 testimonials-grd-right">
						<img src="{{asset('images/9.png')}}" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-8 testimonials-grd">
						<div class="testimonials-grid1 testimonials-grid1-second">
							<h4>Jamescam <span>工程师</span></h4>
							<p>有没有恼人的后果谁避免产生不产生快感痛苦的快感，或者一个</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<div class="footer-logo">
						<a href="index.html">Charm <span>我们在我们的专业服务</span></a>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<h4>Call Us <span>{{$net_data[0]['net_phone']}}</span></h4>
					<p>My Company,875 jewel Road <span>8907 Ukrain.</span></p>
					<ul class="social-icons">
						<li><a href="#" class="p"> </a></li>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="in"> </a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grid">
					<ul>
						<li class="active"><a href="#">首页</a></li>
						<li><a href="{{url('/homeabout/index')}}">关于</a></li>
						<li><a href="{{url('/homemember/index')}}">会员</a></li>
						<li><a href="{{url('homeserver/index')}}">服务</a></li>
						<li><a href="{{url('homestory/index')}}">love story</a></li>
						<li><a href="{{url('homecontact/index')}}">联系我们</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>