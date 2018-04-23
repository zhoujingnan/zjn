<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use App\Back\ActiveModel;
class BackActiveController extends BackCommonController{
	//活动首页
	public function index(){
		$obj=new ActiveModel();
		//总条数
		$count=$obj->count("active","1=1");
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=1;
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('active',"1=1",$offet,$limit)),true);
		return view('back.active_list',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}
	//分页
	public function pagedata(){
		$key=$_GET['key'];
		if(empty($key)){
			$where="1=1";
		}else{
			$where="`active_title` like '%$key%'";
		}
		$obj=new ActiveModel();
		//总条数
		$count=$obj->count("active",$where);
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=$_GET['page'];
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('active',$where,$offet,$limit)),true);
		return view('back.active_list_ajax',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}	
	//验证活动名称的唯一性
	public function uniqueTitle(){echo 4;die;
		$active_title=$_GET['active_title'];
		$obj=new ActiveModel();
		$arr=$obj->get("active","`active_title`='$active_title'");
		if($arr){
			echo 1;die;
		}else{
			echo 0;die;
		}		
	}	
	public function add(){
		return view('back.active_add');
	}	
	public function adddo(){
		$arr=$_POST;
		$img=$_FILES['active_img'];
		$ext=substr($img['name'],strrpos($img['name'],'.'));
		$newName="images/".time()."-".rand(1000,9999).$ext;
		move_uploaded_file($img['tmp_name'],$newName);
		unset($arr['_token']);		
		$arr['active_start_time']=time($arr['active_start_time']);
		$arr['active_end_time']=time($arr['active_end_time']);
		$arr['active_img']=$newName;
		$obj=new ActiveModel();
		$res=$obj->add('active',$arr);
		if($res){
			echo "活动添加成功";
			return redirect('backactive/index');
		}
	}
	//渲染修改页面
	public function up($active_id){
		$obj=new ActiveModel();
		$arr=json_decode(json_encode($obj->get('active',"`active_id`=$active_id")),true);
		return view('back.active_save',['arr'=>$arr]);
	}	
	//修改
	public function updo(){
		$arr=$_POST;
		$img=$_FILES['active_img'];
		if(empty($img['name'])){
			$arr['active_img']=$arr['old_img'];
		}else{
			$ext=substr($img['name'],strpos($img['name'],'.'));
			$newName="images/".time()."-".rand(1000,9999).$ext;
			move_uploaded_file($img['tmp_name'],$newName);
			$arr['active_img']=$newName;			
		}
		$obj=new ActiveModel();
		$active_id=$arr['active_id'];
		unset($arr['_token']);
		unset($arr['active_id']);
		unset($arr['old_img']);
		$res=$obj->upd('active',$arr,"`active_id`=$active_id");
		if($res){
			echo "会员修改成功";
			return redirect('backactive/index');			
		}else{
			return redirect('backactive/index');
		}
	}	
	//删除
	public function del($active_id){
		if(!$active_id){
			echo "删除失败！";die;
		}
		$obj=new ActiveModel();
		$res=$obj->del('active',"`active_id`=$active_id");
		if($res){
			echo "删除成功";
			return redirect('backactive/index');
		}
	}		
	//批删
	public function pidel(){
		$str=$_GET['str'];
		$obj=new ActiveModel();
		$res=$obj->pidel('active',"`active_id` in ($str)");
		if($res){
			echo 1;die;
		}

	}		
}

 ?>