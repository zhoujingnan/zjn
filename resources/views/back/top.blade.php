<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台页面头部</title>
<link href="{{asset('css/css.css')}}" type="text/css" rel="stylesheet" />
</head>
<body onselectstart="return false" oncontextmenu=return(false) style="overflow-x:hidden;">
<!--禁止网页另存为-->
<noscript><iframe scr="*.htm"></iframe></noscript>
<!--禁止网页另存为-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="header">
  <tr>
    <td rowspan="2" align="left" valign="top" id="logo">
	<img src="{{asset($arr['logo'])}}" width="74" height="64"></td>
    <td align="left" valign="bottom">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="bottom" id="header-name">婚恋网后台管理系统</td>
        <td align="right" valign="top" id="header-right">
        	<a href="{{url('backnet/quit')}}" target="topFrame" onFocus="this.blur()" class="admin-out">注销</a>
            <a href="{{url('backindex')}}" target="top" onFocus="this.blur()" class="admin-home">管理首页</a>
        	<a href="{{url('backindex')}}" target="_blank" onFocus="this.blur()" class="admin-index">网站首页</a>       	
            <span>
<!-- 日历 -->
<SCRIPT type=text/javascript src="{{asset('js/clock.js')}}"></SCRIPT>
<SCRIPT type=text/javascript>showcal();</SCRIPT>
            </span>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="bottom">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" id="header-admin">管理员管理</td>
        <td align="left" valign="bottom" id="header-menu">
        <a href="{{url('backindex')}}" target="left" onFocus="this.blur()" id="menuon">后台首页</a>
        <a href="{{url('backadmin/index')}}" target="left" onFocus="this.blur()">管理员管理</a>
        <a href="{{url('backcolumn')}}" target="left" onFocus="this.blur()">栏目管理</a>
        <a href="{{url('/backadvertising/ad_list')}}" target="left" onFocus="this.blur()">广告管理</a>
        <a href="{{url('/backleave/index')}}" target="left" onFocus="this.blur()">留言管理</a>
        <a href="{{url('/backlink/show')}}" target="left" onFocus="this.blur()">友情链接</a>
        <!-- <a href="{{url('backindex')}}" target="left" onFocus="this.blur()">站点管理</a> -->
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>