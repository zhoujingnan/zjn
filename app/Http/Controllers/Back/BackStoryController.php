<?php 
/**
 * 故事管理
 */
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;

use App\Back\StoryModel;
class BackStoryController extends BackCommonController{
	//课堂首页
	public function index(){
		$obj=new StoryModel();
		//总条数
		$count=$obj->count("story","1=1");
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=1;
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('story',"1=1",$offet,$limit)),true);
		$data=json_decode(json_encode($obj->get('member',"1=1")),true);
		// print_r($arr);
		// print_r($data);die;
		foreach ($arr as $key => $val) {
			foreach ($data as $k => $v) {
				if($val['member_id']==$v['member_id']){
					$arr[$key]['member_name']=$v['member_name'];
				}
			}
		}
		return view('back.story_list',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}
	//分页
	public function pagedata(){
		$key=$_GET['key'];
		if(empty($key)){
			$where="1=1";
		}else{
			$where="`story_title` like '%$key%'";
		}
		$obj=new StoryModel();
		//总条数
		$count=$obj->count("story",$where);
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=$_GET['page'];
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('story',$where,$offet,$limit)),true);
		$data=json_decode(json_encode($obj->get('member',"1=1")),true);
		foreach ($arr as $key => $val) {
			foreach ($data as $k => $v) {
				if($val['member_id']==$v['member_id']){
					$arr[$key]['member_name']=$v['member_name'];
				}
			}
		}		
		return view('back.story_list_ajax',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}	
	//验证课堂标题的唯一性
	public function uniqueTitle(){
		$story_title=$_GET['story_title'];
		$obj=new StoryModel();
		$arr=$obj->get("story","`story_title`='$story_title'");
		if($arr){
			echo 1;die;
		}else{
			echo 0;die;
		}		
	}	
	public function add(){
		$obj=new StoryModel();
		$arr=json_decode(json_encode($obj->get('member',"1=1")),true);
		return view('back.story_add',['member_data'=>$arr]);
	}
	//渲染修改页面
	public function up($story_id){
		$obj=new StoryModel();
		$member_data=json_decode(json_encode($obj->get('member',"1=1")),true);
		$arr=json_decode(json_encode($obj->get('story',"`story_id`=$story_id")),true);
		return view('back.story_save',['arr'=>$arr,'member_data'=>$member_data]);
	}
	//修改
	public function updo(){
		$arr=$_POST;
		unset($arr['_token']);
		$story_id=$arr['story_id'];
		unset($arr['story_id']);
		$obj=new StoryModel();
		$res=$obj->upd('story',$arr,"`story_id`=$story_id");
		if($res){
			echo "修改成功";
			return redirect('backstory/index');
		}else{
			return redirect("backstory/index");
		}
	}		
	//添加
	public function adddo(){
		$arr=$_POST;
		unset($arr['_token']);
		$obj=new StoryModel();
		$res=$obj->add('story',$arr);
		if($res){
			echo "添加故事成功";
			return redirect('backstory/index');
		}
	}	
	//删除
	public function del($story_id){
		if(!$story_id){
			echo "删除失败！";die;
		}
		$obj=new StoryModel();
		$res=$obj->del('story',"`story_id`=$story_id");
		if($res){
			echo "删除成功";
			return redirect('backstory/index');
		}
	}		
	//批删
	public function pidel(){
		$str=$_GET['str'];
		$obj=new StoryModel();
		$res=$obj->pidel('story',"`story_id` in ($str)");
		if($res){
			echo 1;die;
		}

	}	
}



 ?>