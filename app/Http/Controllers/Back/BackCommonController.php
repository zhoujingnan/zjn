<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Session;
use App\Back\CommonModel;
class BackCommonController extends Controller{
	public function __construct(){
		$admin_id=session::get('admin_id');
		if(empty($admin_id)){
			echo "请先登录！跳转中....";
			$url=url("backlogin");
			header("Refresh:2;url=$url");die;
		}else{
			//判断权限
			$obj=new CommonModel();
			$sql="SELECT r_p.power_id 
				  FROM role_power AS r_p 
				  WHERE role_id IN 
					(SELECT a_r.role_id 	
					 FROM admin_role AS a_r 
					 INNER JOIN role AS r 
					 ON a_r.role_id=r.role_id 
					 WHERE `admin_id`=$admin_id)";
			$power=json_decode(json_encode($obj->sql($sql)),true);
			$data=array();
			foreach ($power as $key => $val) {
				$data[]=$val['power_id'];
			}
			$data=array_unique($data);
			$id_str=implode($data,",");
			$sql="SELECT * FROM `power` WHERE `power_id` IN ($id_str)";
			$power_data=json_decode(json_encode($obj->sql($sql)),true);
			//所拥有的权限
			$ar_data=array();
			foreach ($power_data as $key => $val) {
				$ar_data[$key]=$val['c_name'];
			}
			//获取当前的控制器名和方法名
			$a=request()->route()->getAction()['controller'];
			$b=explode('@',$a);
			$c=strtolower(substr($b[0],26));
			// echo $c."<hr>";
			// print_r($ar_data);die;
			if(!in_array($c,$ar_data)){
				echo "没有权限！";die;				
			}
			
		}

	}
	
	
}


 ?>