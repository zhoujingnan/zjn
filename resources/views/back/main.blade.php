<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="{{asset('css/css.css')}}" type="text/css" rel="stylesheet" />
<link href="{{asset('css/main.css')}}" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="{{asset('images/main/favicon.ico')}}" />
<script src="{{asset('jquery-1.8.3.js')}}"></script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#main{ font-size:12px;}
#main span.time{ font-size:14px; color:#528dc5; width:100%; padding-bottom:10px; float:left}
#main div.top{ width:100%; background:url({{asset('images/main/main_r2_c2.jpg')}}) no-repeat 0 10px; padding:0 0 0 15px; line-height:35px; float:left}
#main div.sec{ width:100%; background:url({{asset('images/main/main_r2_c2.jpg')}}) no-repeat 0 15px; padding:0 0 0 15px; line-height:35px; float:left}
.left{ float:left}
#main div a{ float:left}
#main span.num{  font-size:30px; color:#538ec6; font-family:"Georgia","Tahoma","Arial";}
.left{ float:left}
div.main-tit{ font-size:14px; font-weight:bold; color:#4e4e4e; background:url({{asset('images/main/main_r4_c2.jpg')}}) no-repeat 0 33px; width:100%; padding:30px 0 0 20px; float:left}
div.main-con{ width:100%; float:left; padding:10px 0 0 20px; line-height:36px;}
div.main-corpy{ font-size:14px; font-weight:bold; color:#4e4e4e; background:url({{asset('images/main/main_r6_c2.jpg')}}) no-repeat 0 33px; width:100%; padding:30px 0 0 20px; float:left}
div.main-order{ line-height:30px; padding:10px 0 0 0;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="main">
  <tr>
    <td colspan="2" align="left" valign="top">
    <span class="time"><strong>{{$admin_data['h']}}！{{$admin_data['admin_name']}}</strong></span>
    <div class="top"><span class="left">您的登灵时间：{{date("Y-m-d H:i",$admin_data['last_login_time'])}}   登录IP：{{$admin_data['last_ip']}} &nbsp;&nbsp;&nbsp;&nbsp;</span><a href="{{url('backadmin/uppwd',['id'=>$admin_data['admin_id']])}}" target="mainFrame" onFocus="this.blur()">更改密码</a></div>
    <div class="sec">这是您第<span class="num">{{$admin_data['login_num']}}</span>次,登录！</div>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top" width="50%">
    <div class="main-tit">网站信息</div>
    <div class="main-con">
		网站名称：{{$arr['net_name']}}<br/>
		网站关键字：{{$arr['net_keys']}}<br/>
		网站URL：{{$arr['net_url']}}<br />
		网站logo：<img src="{{asset($arr['logo'])}}" width="100" /><br/>
		网站坐标：x:{{$arr['x_coord']}},y:{{$arr['y_coord']}}<br/>
		网站描述：{{$arr['net_desc']}}<br/>
		<button id="net_update">编辑</button>
    </div>
    </td>
    <td align="left" valign="top" width="49%">
    <div class="main-tit">联系我们</div>
    <div class="main-con">
		企业地址：{{$data['net_address']}}<br/>
		备案号：{{$data['net_bei']}}<br/>
		邮编：{{$data['net_post_code']}}<br />
		企业二维码：<img src="{{asset($data['net_code'])}}" width="100" /><br/>
		联系电话：{{$data['net_phone']}}<br/>
		客服QQ：{{$data['service_qq']}}<br/>
		<button id="con_update">编辑</button>
    </div>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="left" valign="top">
    <div class="main-corpy">系统提示</div>
    <div class="main-order">1=>如您在使用过程有发现出错请及时与我们取得联系；为保证您得到我们的后续服务，强烈建议您购买我们的正版系统或向我们定制系统！<br/>
2=>强烈建议您将IE7以上版本或其他的浏览器</div>
    </td>
  </tr>
</table>
<script>
	$(function(){
		$(document).on('click','#net_update',function(){
			location.href="<?php echo url('backnet/netadd');?>";
		})
		$(document).on('click','#con_update',function(){
			location.href="<?php echo url('backnet/conadd');?>";
		})
	})
</script>
</body>
</html>