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
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：友情链接</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
      <tr>
       
        <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="{{url('backlink/add')}}" target="mainFrame" onFocus="this.blur()" class="add">新增链接</a></td>
      </tr>
  </table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">链接类型</th>
        <th align="center" valign="middle" class="borderright">网站名</th>
        <th align="center" valign="middle" class="borderright">网站url</th>
        <th align="center" valign="middle" class="borderright">网站logo</th>
        <th align="center" valign="middle" class="borderright">网站简介</th>
        <th align="center" valign="middle">操作</th>
      </tr>
       @foreach($arr as $key =>$val)
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">           
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['link_id']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">
			@if($val['link_type']==1) 文本 @else 图片 @endif
			</td>
            <td align="center" valign="middle" class="borderright borderbottom">
             {{$val['net_name']}}
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">
             {{$val['net_url']}}
            </td>
			<td align="center" valign="middle" class="borderright borderbottom">
             @if($val['link_type']==1) {{$val['net_logo']}} @else <img src="{{asset($val['net_logo'])}}" width="100"/> @endif
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">
             {{$val['net_desc']}}
            </td>
            <td align="center" valign="middle" class="borderbottom">
              <a href="javascript:void(0)" target="mainFrame" id="{{$val['link_id']}}" onFocus="this.blur()" class="del" class="add">删除</a>
            </td>
          </tr>
          @endforeach

    </table></td>
    </tr>
  <tr>
  </tr>
</table>
<script>
	$(function(){
		//删除
		$(document).on('click','.del',function(){
			var obj = $(this);
			var id = obj.attr('id');
			$.ajax({
				type:'get',
				url:"<?php echo url('backlink/del')?>",
				data:{id:id},
				success:function(arr){
					obj.parent().parent().remove();
				}
			})
		})
	})
</script>
</body>
</html>