<?php
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use DB;
class BackAdminController extends BackCommonController{
	public function index(){
		$data = DB::select('select * from `admin` where admin_id!=1');
		$data = json_decode(json_encode($data), true);
		return view('back.admin_list',['arr'=>$data]);
	}
	public function add(){
		return view('back.admin_add');
	}
	public function add_do(){
		$name = $_POST['name'];
		$pwd = md5($_POST['pwd']);
		$res = DB::insert('insert into `admin`(admin_name,admin_pwd) values(?,?)',["$name","$pwd"]);
		if($res){
			return redirect('backadmin/index');
		}
	}
	public function sole(){
		$name = $_GET['name'];
		$res = DB::select("select * from `admin` where admin_name='$name'");
		if($res){
			return 0;
		}else{
			return 1;
		}
	}
	public function del(){
		$id = $_GET['id'];
		$res = DB::delete("delete from `admin` where admin_id=$id");
		if($res){
			return 1;
		}else{
			return 0;
		}
	}
	//修改密码
	public function uppwd($id){
		$a_data = DB::select("select * from `admin` where admin_id=$id");
		$data = json_decode(json_encode($a_data), true)[0];
		return view('back.uppwd',['data'=>$data]);
	}
	//验证密码
	public function is_pwd(){
		$pwd = $_GET['pwd'];
		$id = $_GET['id'];
		$a_data = DB::select("select * from `admin` where admin_id=$id");
		$data = json_decode(json_encode($a_data), true)[0];
		if(md5($pwd)==$data['admin_pwd']){
			return 1;
		}else{
			return 0;
		}
	}
	public function uppwd_do(){
		$pwd = $_GET['pwd'];
		$pwd = md5($pwd);
		$id = $_GET['id'];
		$res = DB::update("update `admin` set `admin_pwd`='$pwd' where admin_id=$id");
		if($res){
			return 1;
		}else{
			return 0;
		}
	}
	//添加角色
	public function roleadd($id){
		$a_data = DB::select("select * from `admin` where admin_id=$id");
		$admin_name = json_decode(json_encode($a_data), true)[0]['admin_name'];
		$r_data = DB::select("select * from `role`");
		$r_data = json_decode(json_encode($r_data), true);
		$p_data = DB::select("select * from `admin_role` where admin_id=$id");
		$p_data = json_decode(json_encode($p_data), true);
		//var_dump($r_data);
		//var_dump($p_data);
		foreach($r_data as $key => $val){
			foreach($p_data as $k => $v){
				if($val['role_id']==$v['role_id']){
					$r_data[$key]['check'] = "checked";
				}
			}
		}
		//var_dump($r_data);die;
		return view('back.r_add',['admin_name'=>$admin_name,'data'=>$r_data,'id'=>$id]);
	}
	public function r_do(){
		$id = $_POST['id'];
		$r_id = $_POST['role'];
		DB::delete("delete from `admin_role` where admin_id=$id");
		foreach($r_id as $k => $v){
			$res = DB::insert('insert into `admin_role`(admin_id,role_id) values(?,?)',["$id","$v"]);
		}
		if($res){
			return redirect('backadmin/index');
		}
	}
	//修改状态
	public function upstatus(){
		$id = $_GET['id'];
		$status = $_GET['status'];
		$res = DB::update("update `admin` set `status`=$status where admin_id=$id");
		if($res){
			return 1;
		}else{
			return 0;
		}
	}
}


 ?>