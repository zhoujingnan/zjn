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