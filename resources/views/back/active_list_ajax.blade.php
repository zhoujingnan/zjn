<tr>
    <td align="left" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
          <tr>
            <th align="center" valign="middle" class="borderright">
              <span class="pidel">批删</span>
            </th>
            <th align="center" valign="middle" class="borderright">编号</th>
            <th align="center" valign="middle" class="borderright">活动名</th>
            <th align="center" valign="middle" class="borderright">活动图片</th>
            <th align="center" valign="middle" class="borderright">活动地址</th>
            <th align="center" valign="middle" class="borderright">活动时间</th>
            <th align="center" valign="middle">操作</th>
          </tr>
          @foreach($arr as $key =>$val)
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="center" valign="middle" class="borderright borderbottom">
              <input type="checkbox" class="box" value="{{$val['active_id']}}">
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['active_id']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['active_title']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">
            	<img src="{{asset($val['active_img'])}}" alt="" width="150">
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">
             {{$val['active_address']}}
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">{{date("Y-m-d H:i",$val['active_start_time'])}}--{{date("Y-m-d H:i",$val['active_end_time'])}}</td>
            <td align="center" valign="middle" class="borderbottom">
              <a href="{{url('backactive/up',['active_id'=>$val['active_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
              <span class="gray">&nbsp;|&nbsp;</span>
              <a href="{{url('backactive/del',['active_id'=>$val['active_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
            </td>
          </tr>
          @endforeach
        </table>
    </td>
  </tr>
  <tr>
    <input type="hidden" name="page" value="{{$page}}">
    <input type="hidden" name="totalpage" value="{{$totalpage}}">
    <td align="left" valign="top" class="fenye">共{{$count}}条数据&nbsp;&nbsp;
        <a href="javascript:void(0)" class="first" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="prev" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="next" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="end" target="mainFrame" onFocus="this.blur()">尾页</a>
    </td>
  </tr>
