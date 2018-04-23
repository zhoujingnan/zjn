<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use App\Back\LoginModel;
use Session;
use DB;
class BackLoginController extends Controller{
	public function getIndex(){
		return view('back.login');
	}
	public function getLogin(){
		$arr=$_GET;
		$obj=new LoginModel();
		$arr['pwd'] = md5($arr['pwd']);
		$arr=$obj->find($arr['username'],$arr['pwd']);
		if(empty($arr)){
			echo "用户名或密码错误！跳转中....";
			$url=url("backlogin");
			header("Refresh:2;url=$url");
		}else{
			$array = json_decode(json_encode($arr), true)[0];
			$name = $array['admin_name'];
			$admin_data = DB::select("select *from `admin` where admin_name='$name'");
			$admin_data = json_decode(json_encode($admin_data), true)[0];
			if($admin_data['status']==1){
				$data=$this->getArray($arr);
				$last_ip=$this->getIp();
				$last_login_time=time();
				$obj=new LoginModel();
				$res=$obj->up($last_ip,$data[0]['admin_id'],$last_login_time);
				if($res){
					//存储session
					Session::put('admin_id', $data[0]['admin_id']);
					return redirect('backindex');				
				}
			}else{
				echo "该用户已被禁用！跳转中....";
				$url=url("backlogin");
				header("Refresh:2;url=$url");
			}			
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
	public function getArray($e){
		$e=(array)$e;
	    foreach($e as $k=>$v){
	        if( gettype($v)=='resource' ) return;
	        if( gettype($v)=='object' || gettype($v)=='array')
	            $e[$k]=(array)$this->getArray($v);
	    }
	    return $e;
	}
	public function getObject($e){
		if( gettype($e)!='array' ) return;
	    foreach($e as $k=>$v){
	        if( gettype($v)=='array' || getType($v)=='object' )
	            $e[$k]=(object)$this->getObject($v);
	    }
	    return (object)$e;
	}
	
}

 ?>