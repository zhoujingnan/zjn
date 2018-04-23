<?php 
/*
广告管理
*/
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use DB;
use App\Back\AdvertisingModel;
class BackAdvertisingController extends BackCommonController{
	//添加广告
	public function add(){
		return view("back.advertisingadd");
	}
	public function add_do(){
		$ad_name = isset($_POST['ad_name'])?htmlspecialchars($_POST['ad_name'],ENT_QUOTES ):"";
		$ad_type = isset($_POST['ad_type'])?htmlspecialchars($_POST['ad_type'],ENT_QUOTES ):"";
		$ad_link = isset($_POST['ad_link'])?htmlspecialchars($_POST['ad_link'],ENT_QUOTES ):"";
		$ad_desc = isset($_POST['ad_desc'])?htmlspecialchars($_POST['ad_desc'],ENT_QUOTES ):"";
		$ad_content = isset($_POST['ad_content'])?htmlspecialchars($_POST['ad_content'],ENT_QUOTES ):"";
		$start_time = isset($_POST['start_time'])?htmlspecialchars($_POST['start_time'],ENT_QUOTES ):"";
		$start_time = strtotime($start_time);
		$end_time = isset($_POST['end_time'])?htmlspecialchars($_POST['end_time'],ENT_QUOTES ):"";
		$end_time = strtotime($end_time);
		$img = $_FILES;
		//var_dump($img);die;
		if(empty($img)){
			$ad_content = $ad_content;
		}else{
			if($img['ad_content']['error']==0){
				$postfix = substr($img['ad_content']['name'],strpos($img['ad_content']['name'],'.'));
				$ad_content = "images/".time()."-".rand(1000,9999).$postfix;
				move_uploaded_file($_FILES["ad_content"]["tmp_name"],  $ad_content);
			}
		}
		$res = DB::insert('insert into `advertising`(ad_name,ad_type,ad_link,ad_desc,ad_content,start_time,end_time) values(?,?,?,?,?,?,?)',["$ad_name","$ad_type","$ad_link","$ad_desc","$ad_content","$start_time","$end_time"]);
		if($res){
			return redirect('backadvertising/ad_list');
		}
	}
	//广告展示
	public function ad_list(){
		$count = DB::table('advertising')->count();//总条数
		$page = 1;//当前页数
		$total = ceil($count/5);//总页数
		$data = DB::select('select * from `advertising` limit 0,5');
		$data = json_decode(json_encode($data), true);
		//var_dump($data);
		return view("back.advertisingad_list",array('arr'=>$data,'page'=>$page,'count'=>$count,'totalpage'=>$total));
	}
	public function pagedata(){
		$key=$_GET['key'];
		if(empty($key)){
			$where="1=1";
		}else{
			$where="`ad_name` like '%$key%'";
		}
		$obj=new AdvertisingModel();
		//总条数
		$count=$obj->count("advertising","1=1");
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=$_GET['page'];
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('advertising',$where,$offet,$limit)),true);
		return view('back.ad_list_ajax',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}
	//广告修改
	public function ad_up($id){
		$arr = DB::select("select * from `advertising` where ad_id=$id");
		$arr = json_decode(json_encode($arr), true)[0];
		//var_dump($arr);die;
		return view("back.advertisingad_up",array('arr'=>$arr));
	}
	public function up_do(){
		$ad_id = isset($_POST['ad_id'])?htmlspecialchars($_POST['ad_id'],ENT_QUOTES ):"1";
		$ad_con = isset($_POST['ad_con'])?htmlspecialchars($_POST['ad_con'],ENT_QUOTES ):"";
		$ad_name = isset($_POST['ad_name'])?htmlspecialchars($_POST['ad_name'],ENT_QUOTES ):"";
		$ad_type = isset($_POST['ad_type'])?htmlspecialchars($_POST['ad_type'],ENT_QUOTES ):"";
		$ad_link = isset($_POST['ad_link'])?htmlspecialchars($_POST['ad_link'],ENT_QUOTES ):"";
		$ad_desc = isset($_POST['ad_desc'])?htmlspecialchars($_POST['ad_desc'],ENT_QUOTES ):"";
		$ad_content = isset($_POST['ad_content'])?htmlspecialchars($_POST['ad_content'],ENT_QUOTES ):"";
		$start_time = isset($_POST['start_time'])?htmlspecialchars($_POST['start_time'],ENT_QUOTES ):"";
		$start_time = strtotime($start_time);
		$end_time = isset($_POST['end_time'])?htmlspecialchars($_POST['end_time'],ENT_QUOTES ):"";
		$end_time = strtotime($end_time);
		$img = $_FILES;
		if($ad_type==2){
			if($ad_con==""){
				if($img['ad_content']['error']==0){
					$postfix = substr($img['ad_content']['name'],strpos($img['ad_content']['name'],'.'));
					$ad_content = "images/".time()."-".rand(1000,9999).$postfix;
					move_uploaded_file($_FILES["ad_content"]["tmp_name"],  $ad_content);
				}
			}else{
				$ad_content = $ad_con;
			}			
		}
		$res = DB::update("update `advertising` set ad_name='$ad_name',ad_type='$ad_type',ad_link='$ad_link',ad_desc='$ad_desc',ad_content='$ad_content',start_time='$start_time',end_time='$end_time' where ad_id=$ad_id");
		if($res){
			return redirect('backadvertising/ad_list');
		}
	}
	//删除
	public function del(){
		$id = $_GET['id'];
		$res = DB::delete("delete from `advertising` where ad_id in ($id)");
		if($res){
			return 1;
		}
	}
}



 ?>