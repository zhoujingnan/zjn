<?php 
/*
网站管理
*/
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use DB;
use Session;
class BackNetController extends BackCommonController{
	public function index(){
		$admin_id = Session::get('admin_id');
		$a_data = DB::select("select * from `admin` where admin_id=$admin_id");
		$a_data = json_decode(json_encode($a_data), true)[0];
		$a_data['last_login_time'] = $a_data['last_login_time']+3600*8;
		$h = date("H",$a_data['last_login_time']);
		if($h>=0 && $h<6){
			$a_data['h'] = "凌晨好";
		}else if($h>=6 && $h<12){
			$a_data['h'] = "上午好";
		}else if($h>=12 && $h<18){
			$a_data['h'] = "下午好";
		}else if($h>=18 && $h<24){
			$a_data['h'] = "晚上好";
		}
		$n_data = DB::select('select * from `net`');
		$data = json_decode(json_encode($n_data), true)[0];
		$c_data = DB::select('select * from `contact`');
		$c_data = json_decode(json_encode($c_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.main");
		}else{
			return view("back.main",array('arr'=>$data,'data'=>$c_data,'admin_data'=>$a_data));
		}
	}
	public function mainlist(){
		return view("back.main_list");
	}
	public function info(){
		return view("back.main_info");
	}	
	public function message(){
		return view("back.main_message");
	}
	public function menu(){
		return view("back.main_menu");
	}
	//编辑网站信息
	public function netadd(){
		$n_data = DB::select('select * from `net`');
		$data = json_decode(json_encode($n_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.netadd");
		}else{
			return view("back.netadd",array('arr'=>$data));
		}		
	}
	public function netdo(){
		$arr = $_POST;
		$img = $_FILES;
		//var_dump($img['logo']['name']);die;
		if($img['logo']['name']==""){
			$logo = $arr['img'];
		}else{
			if($img['logo']['error']==0){
				$postfix = substr($img['logo']['name'],strpos($img['logo']['name'],'.'));
				$logo = "images/".time()."-".rand(1000,9999).$postfix;
				move_uploaded_file($_FILES["logo"]["tmp_name"],  $logo);
			}
		}
		$name = isset($_POST['name'])?htmlspecialchars($_POST['name'],ENT_QUOTES ):"";
		$keys = isset($_POST['keys'])?htmlspecialchars($_POST['keys'],ENT_QUOTES ):"";
		$url = isset($_POST['url'])?htmlspecialchars($_POST['url'],ENT_QUOTES ):"";
		$desc = isset($_POST['desc'])?htmlspecialchars($_POST['desc'],ENT_QUOTES ):"";
		$x_coord = isset($_POST['x_coord'])?htmlspecialchars($_POST['x_coord'],ENT_QUOTES ):"";
		$y_coord = isset($_POST['y_coord'])?htmlspecialchars($_POST['y_coord'],ENT_QUOTES ):"";
		$n_data = DB::select('select * from `net`');
		if(empty($n_data)){
			//添加网站信息
			$res = DB::insert('insert into `net`(net_name,net_keys,net_url,net_desc,x_coord,y_coord,logo) values(?,?,?,?,?,?,?)',["$name","$keys","$url","$desc","$x_coord","$y_coord","$logo"]);
		}else{
			//修改网站信息
			$res = DB::update("update `net` set net_name='$name',net_keys='$keys',net_url='$url',net_desc='$desc',x_coord='$x_coord',y_coord='$y_coord',logo='$logo'");
		};
		if($res){
			return redirect('backnet/index');
		}		
	}
	//联系我们
	public function conadd(){
		$n_data = DB::select('select * from `contact`');
		$data = json_decode(json_encode($n_data), true)[0];
		//var_dump($data);
		if(empty($data)){
			return view("back.conadd");
		}else{
			
			return view("back.conadd",array('arr'=>$data));
		}		
	}
	public function condo(){
		$arr = $_POST;
		$img = $_FILES;
		//var_dump($img['code']['name']);die;
		if($img['code']['name']==""){
			$code = $arr['code'];
		}else{
			if($img['code']['error']==0){
				$postfix = substr($img['code']['name'],strpos($img['code']['name'],'.'));
				$code = "images/".time()."-".rand(1000,9999).$postfix;
				move_uploaded_file($_FILES["code"]["tmp_name"],  $code);
			}
		}
		$address = isset($_POST['address'])?htmlspecialchars($_POST['address'],ENT_QUOTES ):"";
		$bei = isset($_POST['bei'])?htmlspecialchars($_POST['bei'],ENT_QUOTES ):"";
		$post_code = isset($_POST['post_code'])?htmlspecialchars($_POST['post_code'],ENT_QUOTES ):"";
		$phone = isset($_POST['phone'])?htmlspecialchars($_POST['phone'],ENT_QUOTES ):"";
		$service_qq = isset($_POST['service_qq'])?htmlspecialchars($_POST['service_qq'],ENT_QUOTES ):"";
		$n_data = DB::select('select * from `contact`');
		if(empty($n_data)){
			//添加企业信息
			$res = DB::insert('insert into `contact`(net_address,net_bei,net_post_code,net_phone,service_qq,net_code) values(?,?,?,?,?,?)',["$address","$bei","$post_code","$phone","$service_qq","$code"]);
		}else{
			//修改企业信息
			$res = DB::update("update `contact` set net_address='$address',net_bei='$bei',net_post_code='$post_code',net_phone='$phone',service_qq='$service_qq',net_code='$code'");
		};
		if($res){
			return redirect('backnet/index');
		}		
	}
	//退出
	public function quit(){
		echo "已经退出";
		Session::flush();
		$url=url("backlogin");
		header("Refresh:2;url=$url");die;
	}

}


 ?>