<tr>
    <td align="left" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
          <tr>
            <th align="center" valign="middle" class="borderright">
                <span class="pidel">批删</span>
            </th>
            <th align="center" valign="middle" class="borderright">编号</th>
            <th align="center" valign="middle" class="borderright">IP</th>
            <th align="center" valign="middle" class="borderright">内容</th>
            <th align="center" valign="middle" class="borderright">时间</th>
            <th align="center" valign="middle" class="borderright">状态</th>
            <th align="center" valign="middle">操作</th>
          </tr>
          @foreach($arr as $key =>$val)
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="center" valign="middle" class="borderright borderbottom">
              <input type="checkbox" class="box" value="{{$val['leave_id']}}">
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['leave_id']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['leave_ip']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['leave_content']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['leave_time']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom" title="{{$val['leave_id']}}">
            @if($val['status']==1)
            	<span class="ss" title="{{$val['status']}}">显示</span>
            @else
            	<span class="ss" title="{{$val['status']}}">不显示</span>
            @endif
            <td align="center" valign="middle" class="borderbottom">
              <a href="{{url('backleave/del',['leave_id'=>$val['leave_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
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
