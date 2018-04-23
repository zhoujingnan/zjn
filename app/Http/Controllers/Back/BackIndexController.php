<?php 
//后台首页
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use DB;
use Session;
class BackIndexController extends BackCommonController{
	public function getIndex(){ 
		return view("back.index");
	}
	public function getTop(){
		$n_data = DB::select('SELECT * FROM `net`');
		$data = json_decode(json_encode($n_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.top");
		}else{
			return view("back.top",array('arr'=>$data));
		}
	}
	public function getLeft(){
		$id=session::get('admin_id');
		$data = DB::select("select admin_name,role_name from admin as ad LEFT JOIN admin_role as ar on ad.admin_id=ar.admin_id LEFT JOIN role as r on ar.role_id=r.role_id where ad.admin_id=$id");
		$data = json_decode(json_encode($data), true)[0];
		//var_dump($data);die;
		return view("back.left",array('arr'=>$data));
	}
	public function getSwich(){
		return view("back.swich");
	}
	public function getMain(){
		return view("back.main");
	}
	public function getBottom(){
		return view("back.bottom");
	}
}



 ?>