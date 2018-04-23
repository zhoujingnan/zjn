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
    <td width="99%" align="left" valign="top">您的位置：广告管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="">
	         <span>广告名：</span>
	         <input type="text" name="" value="" class="text-word">
	         <input name="" type="button" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="{{url('backadvertising/add')}}" target="mainFrame" onFocus="this.blur()" class="add">新增广告</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
	<thead>
      <tr>
        <th align="center" valign="middle" class="borderright"><button id="dels">批删</button></th>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">广告名</th>
        <th align="center" valign="middle" class="borderright">广告类型</th>
        <th align="center" valign="middle" class="borderright">广告内容</th>
        <th align="center" valign="middle" class="borderright">链接地址</th>
        <th align="center" valign="middle" class="borderright">开始时间</th>
        <th align="center" valign="middle" class="borderright">结束时间</th>
        <th align="center" valign="middle" class="borderright">描述</th>
        <th align="center" valign="middle">操作</th>
      </tr>
	 </thead>
	 <tbody id="to">
      @foreach($arr as $key =>$val)
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><input type="checkbox" name="dels" class="dels" id="{{$val['ad_id']}}" /></td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$val['ad_id']}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$val['ad_name']}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">
		@if($val['ad_type']==1)
			文本
		@else
			图片
		@endif
		</td>
        <td align="center" valign="middle" class="borderright borderbottom">
		@if($val['ad_type']==1)
			{{$val['ad_content']}}
		@else
			<img src="{{asset($val['ad_content'])}}" width="100" />
		@endif
		</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$val['ad_link']}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{date("Y-m-d",$val['start_time'])}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{date("Y-m-d",$val['end_time'])}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{$val['ad_desc']}}</td>
        <td align="center" valign="middle" class="borderbottom">
			<a href="{{url('backadvertising/ad_up',['id'=>$val['ad_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
			<span class="gray">&nbsp;|&nbsp;</span>
			<a href="javascript:void(0)" target="mainFrame" id="{{$val['ad_id']}}" onFocus="this.blur()" class="del" class="add">删除</a>
		</td>
      </tr>
      @endforeach
	 <tr>
    <input type="hidden" name="page" value="{{$page}}">
    <input type="hidden" name="totalpage" value="{{$totalpage}}">
    <td align="center" valign="top" colspan="10" class="fenye">共{{$count}}条数据&nbsp;&nbsp;当前第{{$page}}页
        <a href="javascript:void(0)" class="first" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="prev" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="next" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="end" target="mainFrame" onFocus="this.blur()">尾页</a>
    </td>
  </tr>
	 </tbody>
    </table></td>
    </tr>
  <tr>
    
  </tr>
</table>
</body>
<script>
	$(function(){
		//删除
		$(document).on('click','.del',function(){
			var obj = $(this);
			var id = obj.attr('id');
			var page = parseInt($("[name='page']").val());
			$.ajax({
				type:'get',
				url:"<?php echo url('backadvertising/del')?>",
				data:{id:id},
				success:function(arr){
					obj.parent().parent().remove();
					ajaxPage(page);
				}
			})
		})
		//批删
		$(document).on('click','#dels',function(){
			if(confirm("are you sure delete?")){
				var id = "";
				var page = parseInt($("[name='page']").val());
				$(".dels:checked").each(function(i,v){
					var aid = $(v).attr('id');
					id += aid+",";
				})
				var len = id.length-1;
				id = id.substr(0,len);
				$.ajax({
					type:'get',
					url:"<?php echo url('backadvertising/del')?>",
					data:{id:id},
					success:function(arr){
						$(".dels:checked").each(function(i,v){
							$(v).parent().parent().remove();
						})
						ajaxPage(page);
					}
				})
			}		
		})
		//搜索
		$(document).on("click",".text-but",function(){
			var text_word=$(".text-word").val();
			ajaxPage(1);      
		})
		//分析当前页
		$(document).on("click",".fenye a",function(){
			var page=parseInt($("[name='page']").val());
			var totalpage=parseInt($("[name='totalpage']").val());
			if($(this).is(".first")){
				p=1;
			}
			if($(this).is(".prev")){
				p=page-1;
				if(p<1){
					p=1;
				}
			}
			if($(this).is(".next")){
				p=page+1;
				if(p>totalpage){
					p=totalpage;
				}			  
			}        
			if($(this).is(".end")){
				p=totalpage;
			}     			
				ajaxPage(p);      
		})
		//发送ajax
		function ajaxPage(p){
			//alert(p)
			var text_word=$(".text-word").val();
			$.ajax({
				type:'get',
				url:"<?php echo url('backadvertising/pagedata')?>",
				data:{page:p,key:text_word},
				success:function(arr){
					console.log(arr);
					$("#to").empty();
					$("#to").html(arr);
				}
			})
		}
	})
</script>
</html>