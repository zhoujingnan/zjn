<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeStoryController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);	
		//故事数组
		$story_data=json_decode(json_encode($obj->get('story',"1=1")),true);
		//会员数组
		$member_data=json_decode(json_encode($obj->get('member',"1=1")),true);
		foreach ($member_data as $key => $val) {
			foreach ($story_data as $k => $v) {
				if($val['member_id']==$v['member_id']){
					$story_data[$k]['member_name']=$val['member_name'];
				}
			}
		}
		return view("home.story_list",['net_data'=>$net_data,'story_data'=>$story_data]);
	}
}


 ?>