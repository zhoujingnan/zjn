<tr>
    <td align="left" valign="top">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
          <thead>
          <tr>
            <th align="center" valign="middle" class="borderright">
              <span class="pidel">批删</span>
            </th>
            <th align="center" valign="middle" class="borderright">编号</th>
            <th align="center" valign="middle" class="borderright">会员名</th>
            <th align="center" valign="middle" class="borderright">头像</th>
            <th align="center" valign="middle" class="borderright">年龄</th>
            <th align="center" valign="middle" class="borderright">身高</th>
            <th align="center" valign="middle" class="borderright">薪资</th>
            <th align="center" valign="middle" class="borderright">地址</th>
            <th align="center" valign="middle">操作</th>
          </tr>
          </thead>
          <tbody class="div">
          @foreach($arr as $key =>$val)
          <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
            <td align="center" valign="middle" class="borderright borderbottom">
               <input type="checkbox" class="box" value="{{$val['member_id']}}">
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['member_id']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['member_name']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">
              <img src="{{asset($val['member_img'])}}" alt="" width="150">
            </td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['member_age']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['member_work']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['member_money']}}</td>
            <td align="center" valign="middle" class="borderright borderbottom">{{$val['member_address']}}</td>
            <td align="center" valign="middle" class="borderbottom">
              <a href="{{url('backmember/up',['member_id'=>$val['member_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">编辑</a>
              <span class="gray">&nbsp;|&nbsp;</span>
              <a href="{{url('backmember/del',['member_id'=>$val['member_id']])}}" target="mainFrame" onFocus="this.blur()" class="add">删除</a>
            </td>
          </tr>
          @endforeach
        </tbody><tfoot></tfoot>
        </table>
    </td>
  </tr>
  <tr>
    <input type="hidden" name="page" value="{{$page}}">
    <input type="hidden" name="totalpage" value="{{$totalpage}}">
    <td align="left" valign="top" class="fenye">{{$count}}条数据 1/1 页&nbsp;&nbsp;
        <a href="javascript:void(0)" class="first" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="prev" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="next" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;
        <a href="javascript:void(0)" class="end" target="mainFrame" onFocus="this.blur()">尾页</a>
    </td>
  </tr>
  