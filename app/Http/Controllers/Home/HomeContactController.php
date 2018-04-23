<?php 	
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Back\CommonModel;
class HomeContactController extends Controller{
	public function index(){
		$obj=new CommonModel();
		//企业简介	
		$net_data=json_decode(json_encode($obj->get('contact',"1=1")),true);	
// print_r($net_data);die;
		$dir=__DIR__."/static/contact_static.html";
		if(file_exists($dir)){
			echo file_get_contents($dir);die;
		}
		else{
			ob_start();
			$content=view("home.contact_list",['net_data'=>$net_data])->__toString();
			file_put_contents($dir,$content);
			echo $content;die;
		}		
	}
	public function redis(){
		$arr=$_GET;
		unset($arr['_token']);
		$arr['leave_ip']=$this->getIp();
		$arr['leave_time']=time();
		$obj=new CommonModel();
		$res=$obj->add("leave",$arr);
		if($res){
			echo "留言成功!跳转中....";
			$url=url("homecontact/index");
			header("Refresh:2;url=$url");
		}
	}
	public function getIp(){
		$url="http://pv.sohu.com/cityjson";
		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_HEADER,0);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		$data=curl_exec($ch);
		$d1=explode(',',$data);
		$d2=explode(':',$d1[0]);
		$ip=$d2[1];
		return $ip;
	}	
}


 ?>