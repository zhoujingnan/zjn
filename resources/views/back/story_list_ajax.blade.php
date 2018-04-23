<tr>
    <td align="left" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
          <tr>
            <th align="center" valign="middle" class="borderright">
              <span class="pidel">批删</span>
            </th>
            <th align="center" valign="middle" class="borderright">编号</th>
            <th align="center" valign="middle" class="borderright">故事名</th>
            <th align="center" valign="middle" class="borderright">分享者</th>
            <th align="center" valign="middle" class="borderright">故事简介</th>
            <th align="center" valign="middle">操作</th>
          </tr>
          @foreach($arr as $key =>$val)
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="center" valign="middle" class="borderright borderbottom">
              <input type="checkbox" class="box" value="{{$val['story_id']}}">
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['story_id']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['story_title']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">
             {{$val['member_name']}}
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['story_desc']}}</td>
            <td align="center" valign="middle" class="borderbottom">
              <a href="{{url('backstory/up',['story_id'=>$val['story_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
              <span class="gray">&nbsp;|&nbsp;</span>
              <a href="{{url('backstory/del',['story_id'=>$val['story_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
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
