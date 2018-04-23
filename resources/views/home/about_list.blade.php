<!DOCTYPE html>
<html>
<head>
<title>About</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Obdurate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //百度地图 -->
<style type="text/css">
	#allmap{width:100%;height:500px;}
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=nIWaZizfhQ2gqsdAyVh6NcX1LuErcLBV"></script>
<!-- //百度地图 -->	
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
</head>

<body>
<!-- header-nav -->
	<div class="header-nav">
		<div style="margin-left:103px;float: left">
			<img src="{{asset('images/logo.png')}}" alt="" width="150px">
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
						<a class="navbar-brand" href="index.html">勇敢说爱，快乐脱单 <span>我们在我们的服务专业</span></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{url('/homeindex/index')}}">首页</a></li>
						<li class="active"><a href="#">关于</a></li>
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
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
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

	<div style="width:500px;float:left;">
		<p style="font-size:18px;margin-top:10px;margin-left:30%;">
			企业地址：{{$con_data['net_address']}}
		</p>
		<p style="font-size:18px;margin-top:10px;margin-left:30%;">
			邮编：{{$con_data['net_post_code']}}
		</p>
		<p style="font-size:18px;margin-top:10px;margin-left:30%;">
			联系电话：{{$con_data['net_phone']}}
		</p>
		<p style="font-size:18px;margin-top:10px;margin-left:30%;">
			客服QQ：{{$con_data['service_qq']}}
		</p>
		<p style="font-size:18px;margin-top:10px;margin-left:30%;">
			邮箱：{{$con_data['email']}}
		</p>
		<p style="font-size:18px;margin-top:10px;margin-left:30%;">
			
			<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=&site=768100410&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2::53" alt="在线咨询" title="在线咨询"/></a>
		</p>
	</div>
	<div id="allmap" style="width:800px;float:left;"></div>
<!-- team -->
	<div class="team" style="clear:both;">
		
	</div>
<!-- //team -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-4 footer-grid">
					<div class="footer-logo">
						<a href="index.html">Charm <span>We are professional in our service</span></a>
					</div>
				</div>
				<div class="col-md-4 footer-grid">
					<h4>Call Us <span>{{$con_data['net_phone']}}</span></h4>
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
						<li><a href="{{url('/homeindex/index')}}">首页</a></li>
						<li class="active"><a href="#">关于</a></li>
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
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");
	var point = new BMap.Point({{$net_data['x_coord']}},{{$net_data['y_coord']}});
	var marker = new BMap.Marker(point);  // 创建标注
	map.addOverlay(marker);              // 将标注添加到地图中
	map.centerAndZoom(point, 15);
	var opts = {
	  width : 200,     // 信息窗口宽度
	  height: 100,     // 信息窗口高度
	  title : "Charm" , // 信息窗口标题
	  enableMessage:true,//设置允许信息窗发送短息
	  message:"亲耐滴，晚上一起吃个饭吧？戳下面的链接看下地址喔~"
	}
	var infoWindow = new BMap.InfoWindow("地址：{{$con_data['net_address']}}", opts);  // 创建信息窗口对象 
	marker.addEventListener("click", function(){          
		map.openInfoWindow(infoWindow,point); //开启信息窗口
	});
</script>

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