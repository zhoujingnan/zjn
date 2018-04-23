<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeMemberController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);
		//查询会员
		$member_data=json_decode(json_encode($obj->get('member',"1=1")),true);
		return view("home.member_list",['net_data'=>$net_data,'member_data'=>$member_data]);
	}
}


 ?>