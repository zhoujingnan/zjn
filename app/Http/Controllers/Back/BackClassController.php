<?php 
/**
 * 课堂类
 */
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use App\Back\ClassModel;
class BackClassController extends BackCommonController{
	//课堂首页
	public function index(){
		$obj=new ClassModel();
		//总条数
		$count=$obj->count("class","1=1");
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=1;
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('class',"1=1",$offet,$limit)),true);
		return view('back.class_list',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}
	//分页
	public function pagedata(){
		$key=$_GET['key'];
		if(empty($key)){
			$where="1=1";
		}else{
			$where="`class_title` like '%$key%'";
		}
		$obj=new ClassModel();
		//总条数
		$count=$obj->count("class",$where);
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=$_GET['page'];
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('class',$where,$offet,$limit)),true);
		return view('back.class_list_ajax',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}	
	//验证课堂标题的唯一性
	public function uniqueTitle(){
		$class_title=$_GET['class_title'];
		$obj=new ClassModel();
		$arr=$obj->get("class","`class_title`='$class_title'");
		if($arr){
			echo 1;die;
		}else{
			echo 0;die;
		}		
	}
	public function add(){
		return view('back.class_add');
	}
	//添加
	public function adddo(){
		$arr=$_POST;
		$url=$_FILES['class_url'];
		$ext=substr($url['name'],strrpos($url['name'],'.'));
		$newName="images/".time()."-".rand(1000,9999).$ext;
		move_uploaded_file($url['tmp_name'],$newName);
		unset($arr['_token']);
		$arr['class_url']=$newName;
		$obj=new ClassModel();
		$res=$obj->add('class',$arr);
		if($res){
			echo "添加成功";
			return redirect("backclass/index");
		}
	}
	//渲染修改页面
	public function up($class_id){
		$obj=new ClassModel();
		$arr=json_decode(json_encode($obj->get('class',"`class_id`=$class_id")),true);
		return view('back.class_save',['arr'=>$arr]);
	}
	//修改
	public function updo(){
		$arr=$_POST;
		$img=$_FILES['class_url'];
		if(empty($img['name'])){
			$arr['class_url']=$arr['old_url'];
		}else{
			$ext=substr($img['name'],strpos($img['name'],'.'));
			$newName="images/".time()."-".rand(1000,9999).$ext;
			move_uploaded_file($img['tmp_name'],$newName);
			$arr['class_url']=$newName;			
		}
		$obj=new ClassModel();
		$class_id=$arr['class_id'];
		unset($arr['_token']);
		unset($arr['class_id']);
		unset($arr['old_url']);
		$res=$obj->upd('class',$arr,"`class_id`=$class_id");
		if($res){
			echo "会员修改成功";
			return redirect('backclass/index');			
		}else{
			return redirect("backclass/index");
		}
	}	
	//删除
	public function del($class_id){
		if(!$class_id){
			echo "删除失败！";die;
		}
		$obj=new ClassModel();
		$res=$obj->del('class',"`class_id`=$class_id");
		if($res){
			echo "删除成功";
			return redirect('backclass/index');
		}
	}	
	//批删
	public function pidel(){
		$str=$_GET['str'];
		$obj=new ClassModel();
		$res=$obj->pidel('class',"`class_id` in ($str)");
		if($res){
			echo 1;die;
		}

	}	
}


 ?>