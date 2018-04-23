<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use Session;
use App\Back\RoleModel;
class BackRoleController extends BackCommonController{
	//角色首页
	public function index(){
		// $admin_id=session::get("admin_id");
		$obj=new RoleModel();
		$arr=json_decode(json_encode($obj->get("role","1=1")),true);
		return view("back.role_list",['arr'=>$arr]);
	}
	//添加角色
	public function add(){
		return view("back.role_add");
	}
	//添加
	public function adddo(){
		$arr=$_POST;
		unset($arr['_token']);
		$obj=new RoleModel();
		$res=$obj->add('role',$arr);
		if($res){
			echo "添加成功";
			return redirect('backrole/index');
		}
	}
	//验证唯一性
	public function uniqueTitle(){
		$role_name=$_GET['role_name'];
		$obj=new RoleModel();
		$res=$obj->get('role',"`role_name`='$role_name'");
		if($res){
			echo 1;die;
		}
	}
	//修改
	public function up($role_id){
		$obj=new RoleModel();
		$arr=json_decode(json_encode($obj->get("role","`role_id`=$role_id")),true);
		return view('back.role_save',['arr'=>$arr]);
	}
	//修改
	public function updo(){
		$arr=$_POST;
		$role_id=$arr['role_id'];
		unset($arr['role_id']);
		unset($arr['_token']);
		$obj=new RoleModel();
		$res=$obj->upd("role",$arr,"`role_id`=$role_id");
		if($res){
			echo "修改成功";
			return redirect('backrole/index');
		}else{
			return redirect("backrole/index");
		}
	}	
	//删除
	public function del($role_id){
		if(!$role_id){
			echo "删除失败！";die;
		}
		$obj=new RoleModel();
		$res=$obj->del('role',"`role_id`=$role_id");
		if($res){
			echo "删除成功";
			return redirect('backrole/index');
		}
	}		
	//批删
	public function pidel(){
		$str=$_GET['str'];
		$obj=new RoleModel();
		$res=$obj->pidel('role',"`role_id` in ($str)");
		if($res){
			echo 1;die;
		}

	}	
	//添加权限
	public function addpower($role_id){
		$obj=new RoleModel();
		$sql="SELECT * FROM `role_power` AS r_p INNER JOIN `power` AS p ON r_p.power_id=p.power_id WHERE r_p.role_id=$role_id";
		$arr=json_decode(json_encode($obj->sql($sql)),true);
		$id=array();
		foreach ($arr as $key => $val) {
			$id[]=$val['power_id'];
		}
		$role=json_decode(json_encode($obj->get("role","`role_id`=$role_id")),true);
		$data=json_decode(json_encode($obj->get('power',"1=1")),true);
		return view('back.role_add_power',['id'=>$id,'data'=>$data,'role'=>$role]);
	}
	public function addpowerdo(){
		$arr=$_POST;
		unset($arr['_token']);
		$data=array();
		foreach ($arr['power_id'] as $key => $val) {
			$data[$key]['role_id']=$arr['role_id'];
			$data[$key]['power_id']=$val;
		}
		$role_id=$data[0]['role_id'];
		$obj=new RoleModel();
		$obj->del("role_power","`role_id`=$role_id");
		foreach ($data as $key => $val) {
			$res=$obj->add("role_power",$val);
		}
		if($res){
			echo "修改权限成功";
			return redirect("backrole/index");
		}
	}
}


 ?>