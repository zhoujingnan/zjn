<?php 
namespace App\Back;
use Illuminate\Database\Eloquent\Model;
use DB;
class LoginModel extends Model{
	public function find($user,$pwd){
		$arr=DB::select("SELECT * FROM `admin` WHERE `admin_name`=? AND `admin_pwd`=?",[$user,$pwd]);
		return (array)$arr;die;
	}
	public function up($ip,$id,$time){
		$res=DB::update("UPDATE `admin` SET `last_ip`=?,`last_login_time`=?,`login_num`=login_num+1 WHERE `admin_id`=?",[$ip,$time,$id]);
		return $res;die;
	}
}
 ?>