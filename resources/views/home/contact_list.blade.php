<!DOCTYPE html>
<html>
<head>
<title>member</title>
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
<style>
	.div_img{
		background: white;
		width:250px;
		height:300px;
		float: left;
		margin-left: 33px;
		margin-top: 10px;
	}
	.img:hover{
		transform: scale(1.2);
		webkit-transition: all 1.5s ease-in-out;
		o-transform: scale(1.2);
		-ms-transform: scale(1.2);
		moz-transform: scale(1.2);
		webkit-transform: scale(1.2);
		moz-transition: all 1.5s ease-in-out;
		ms-transition: all 1.5s ease-in-out;
		o-transition: all 1.5s ease-in-out;
		transition: all 1.5s ease-in-out;
	}

</style>
</head>

<body>
<!-- header-nav -->
	<div class="header-nav">
		<div style="margin-left:103px;float: left">
			<img src="{{asset('images/logo.png')}}" alt="" width="150px">
		</div>		
		<div class="container">
			<nav class="navbar navbar-default">

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


				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{url('homeindex/index')}}">首页</a></li>
						<li><a href="{{url('/homeabout/index')}}">关于</a></li>
						<li><a href="{{url('/homemember/index')}}">会员</a></li>
						<li><a href="{{url('homeserver/index')}}">服务</a></li>
						<li><a href="{{url('homestory/index')}}">love story</a></li>
						<li class="active"><a href="#">联系我们</a></li>
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
	<div class="banner-contact">
		<div class="container">
			<div class="banner-contact-info">
				<h3>认真科学谈恋爱，幸福长久过一生</h3>
				<p>但在某些情况下其职责的需要，经常会出现的乐趣已经被否定，或避免乐趣和烦恼的一些事情还没有被接受。</p>
			</div>
		</div>
	</div>
<!-- //banner -->
<!--typography-page -->
	<div class="typo">
		<div class="container">
			<div class="col-md-3 contact-grid">
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>+3402 890 679</li>
							<li>+5356 890 679</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address">
					<div class="col-xs-3 contact-grdl">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>{{$net_data[0]['email']}}</li>
							<li>Charm</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="mail">
					<div class="col-xs-3 contact-grdl">
						<!-- <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> -->
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-5 contact-grid">
				<form action="{{url('homecontact/redis')}}" method="get">
					<input type="text" value="Name" name="leave_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="email" value="Email" name="leave_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea name="leave_content" type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Leave">
				</form>
			</div>
			<div class="col-md-4 contact-grid">
				<div class="newsletter1">
					<!-- <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> -->
					<img src="{{asset($net_data[0]['net_code'])}}" alt="">
					</h3>
				</div>
				<form>
					<input type="text" value="wechat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
<!-- //typography-page -->
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
						<li><a href="{{url('homeindex/index')}}">首页</a></li>
						<li><a href="{{url('/homeabout/index')}}">关于</a></li>
						<li><a href="{{url('/homemember/index')}}">会员</a></li>
						<li><a href="{{url('homeserver/index')}}">服务</a></li>
						<li><a href="{{url('homestory/index')}}">love story</a></li>
						<li class="active"><a href="#">联系我们</a></li>
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