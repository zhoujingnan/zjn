<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeAboutController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$con_data=json_decode(json_encode($obj->get('contact',"1=1")),true)[0];
		$net_data=json_decode(json_encode($obj->get('net',"1=1")),true)[0];
		return view("home.about_list",array('con_data'=>$con_data,'net_data'=>$net_data));
	}
}


 ?>