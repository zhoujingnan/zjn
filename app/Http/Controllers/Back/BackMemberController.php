<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use App\Back\MemberModel;
class BackMemberController extends BackCommonController{
	//首页展示
	public function index(){
		$obj=new MemberModel();
		//总条数
		$count=$obj->count("member","1=1");
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=1;
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('member',"1=1",$offet,$limit)),true);
		return view('back.member_list',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}
	//分页
	public function pagedata(){
		$key=$_GET['key'];
		if(empty($key)){
			$where="1=1";
		}else{
			$where="`member_name` like '%$key%'";
		}
		$obj=new MemberModel();
		//总条数
		$count=$obj->count("member",$where);
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=$_GET['page'];
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('member',$where,$offet,$limit)),true);
		return view('back.member_list_ajax',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
		

	}
	//验证用户名的唯一性
	public function uniqueName(){
		$member_name=$_GET['member_name'];
		$obj=new MemberModel();
		$arr=$obj->get("member","`member_name`='$member_name'");
		if($arr){
			echo 1;die;
		}else{
			echo 0;die;
		}
	}	
	//添加会员
	public function add(){
		return view('back.member_add');
	}
	//添加会员并上传会员头像
	public function upload(){
		$arr=$_POST;
		$img=$_FILES['member_img'];
		$ext=substr($img['name'],strpos($img['name'],'.'));
		$newName="images/".time()."-".rand(1000,9999).$ext;
		move_uploaded_file($img['tmp_name'],$newName);
		$arr['member_img']=$newName;
		$obj=new MemberModel();
		unset($arr['_token']);
		$res=$obj->add('member',$arr);
		if($res){
			echo "会员添加成功";
			return redirect('backmember/index');
		}
		
	}
	
	//渲染修改页面
	public function up($member_id){
		$obj=new MemberModel();
		$arr=json_decode(json_encode($obj->get('member',"`member_id`=$member_id")),true);
		return view('back.member_save',['arr'=>$arr]);
	}
	//修改
	public function updo(){
		$arr=$_POST;
		$img=$_FILES['member_img'];
		if(empty($img['name'])){
			$arr['member_img']=$arr['oldimg'];
		}else{
			$ext=substr($img['name'],strpos($img['name'],'.'));
			$newName="images/".time()."-".rand(1000,9999).$ext;
			move_uploaded_file($img['tmp_name'],$newName);
			$arr['member_img']=$newName;			
		}
		$obj=new MemberModel();
		$member_id=$arr['member_id'];
		unset($arr['_token']);
		unset($arr['member_id']);
		unset($arr['oldimg']);
		$res=$obj->upd('member',$arr,"`member_id`=$member_id");
		if($res){
			echo "会员修改成功";
			return redirect('backmember/index');			
		}else{
			return redirect("backmember/index");
		}
	}
	//删除
	public function del($member_id){
		if(!$member_id){
			echo "删除失败！";die;
		}
		$obj=new MemberModel();
		$res=$obj->del('member',"`member_id`=$member_id");
		if($res){
			echo "删除成功";
			return redirect('backmember/index');
		}
	}
	//批删
	public function pidel(){
		$str=$_GET['str'];
		$obj=new MemberModel();
		$res=$obj->pidel('member',"`member_id` in ($str)");
		if($res){
			echo 1;die;
		}

	}

}

 ?>