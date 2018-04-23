<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="{{asset('css/css.css')}}" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{{asset('js/sdmenu.js')}}"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url({{asset('images/main/leftbg.jpg')}}) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="{{asset('images/main/member.gif')}}" width="44" height="44" /></div>
    <span>用户：{{$arr['admin_name']}}<br>角色：{{$arr['role_name']}}</span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      
      <div>
        <span>管理员管理</span>
        <a href="{{url('backadmin/index')}}" target="mainFrame" onFocus="this.blur()">用户管理</a>
        <a href="{{url('backrole/index')}}" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="{{url('backpower/index')}}" target="mainFrame" onFocus="this.blur()">权限管理</a>
        <!-- <a href="main.html" target="mainFrame" onFocus="this.blur()">自定义权限</a> -->
      </div>
      <div>
        <span>栏目管理</span>
       <!--  <a href="{{url('backcolumn')}}" target="mainFrame" onFocus="this.blur()">栏目列表</a> -->
        <a href="{{url('backmember/index')}}" target="mainFrame" onFocus="this.blur()">会员管理</a>
        <a href="{{url('backclass/index')}}" target="mainFrame" onFocus="this.blur()">课堂管理</a>
        <a href="{{url('backstory/index')}}" target="mainFrame" onFocus="this.blur()">故事管理</a>
        <a href="{{url('backactive/index')}}" target="mainFrame" onFocus="this.blur()">活动管理</a>
      </div>
      <div>
        <span>广告管理</span>
        <a href="{{url('backadvertising/add')}}" target="mainFrame" onFocus="this.blur()">添加广告</a>
        <a href="{{url('backadvertising/ad_list')}}" target="mainFrame" onFocus="this.blur()">广告列表</a>
      </div>
      <div>
        <span>留言管理</span>
        <a href="{{url('backleave/index')}}" target="mainFrame" onFocus="this.blur()">留言列表</a>
      </div>
      <div>
        <span>友情链接</span>
        <a href="{{url('backlink/add')}}" target="mainFrame" onFocus="this.blur()">添加链接</a>
        <a href="{{url('backlink/show')}}" target="mainFrame" onFocus="this.blur()">链接列表</a>
      </div>
	   
    </div>
</body>
</html>