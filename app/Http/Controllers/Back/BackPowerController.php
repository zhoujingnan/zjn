<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use App\Back\PowerModel;
class BackPowerController extends BackCommonController{
	public function index(){
		$obj=new PowerModel();
		$arr=json_decode(json_encode($obj->get("power","1=1")),true);
		return view("back.power_list",['arr'=>$arr]);
	}
	//添加角色
	public function add(){
		return view("back.power_add");
	}
	//验证唯一性
	public function uniqueTitle(){
		$power_name=$_GET['power_name'];
		$obj=new PowerModel();
		$res=$obj->get('power',"`power_name`='$power_name'");
		if($res){
			echo 1;die;
		}
	}	
	//添加
	public function adddo(){
		$arr=$_POST;
		unset($arr['_token']);
		$obj=new PowerModel();
		$res=$obj->add('power',$arr);
		if($res){
			echo "添加成功";
			return redirect('backpower/index');
		}
	}	
	//修改
	public function up($power_id){
		$obj=new PowerModel();
		$arr=json_decode(json_encode($obj->get("power","`power_id`=$power_id")),true);
		return view('back.power_save',['arr'=>$arr]);
	}
	//修改
	public function updo(){
		$arr=$_POST;
		$power_id=$arr['power_id'];
		unset($arr['power_id']);
		unset($arr['_token']);
		$obj=new PowerModel();
		$res=$obj->upd("power",$arr,"`power_id`=$power_id");
		if($res){
			echo "修改成功";
			return redirect('backpower/index');
		}else{
			return redirect("backpower/index");
		}
	}	
	//删除
	public function del($power_id){
		if(!$power_id){
			echo "删除失败！";die;
		}
		$obj=new PowerModel();
		$res=$obj->del('power',"`power_id`=$power_id");
		if($res){
			echo "删除成功";
			return redirect('backpower/index');
		}
	}		
	//批删
	public function pidel(){
		$str=$_GET['str'];
		$obj=new PowerModel();
		$res=$obj->pidel('power',"`power_id` in ($str)");
		if($res){
			echo 1;die;
		}

	}	
}


 ?>