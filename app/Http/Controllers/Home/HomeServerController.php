<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeServerController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);		
		$a_data=json_decode(json_encode($obj->get('active',"1=1")),true);		
		$c_data=json_decode(json_encode($obj->get('class',"1=1")),true);	
		//var_dump($a_data);var_dump($c_data);die;		
		return view("home.server_list",['a_data'=>$a_data,'c_data'=>$c_data,'net_data'=>$net_data]);
	}
	public function show($id){
		$obj=new CommonModel();
		$time = time();
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);
		$a_data=json_decode(json_encode($obj->get('active',"active_id=$id")),true)[0];
		if($time>$a_data['active_start_time'] && $time<$a_data['active_end_time']){
			$a_data['status'] = "活动已经开始";
		}else if($time<$a_data['active_start_time']){
			$a_data['status'] = "活动未开始";
		}else if($time>$a_data['active_end_time']){
			$a_data['status'] = "活动已结束";
		}
		return view("home.server_show",['a_data'=>$a_data,'net_data'=>$net_data]);
	}
}


 ?>