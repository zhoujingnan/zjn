<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use App\Back\LeaveModel;
use  Mail;
class BackLeaveController extends BackCommonController{
	//查看首页
	public function index(){
		$obj=new LeaveModel();
		//总条数
		$count=$obj->count("leave","1=1");
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=1;
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('leave',"1=1",$offet,$limit)),true);
		return view('back.leave_list',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);		
	}
	//分页
	public function pagedata(){
		$key=$_GET['key'];
		if(empty($key)){
			$where="1=1";
		}else{
			$where="`leave_content` like '%$key%'";
		}
		$obj=new LeaveModel();
		//总条数
		$count=$obj->count("leave",$where);
		//每页显示的条数
		$limit=5;
		//总页数
		$totalpage=ceil($count/$limit);
		//当前页
		$page=$_GET['page'];
		//偏移量
		$offet=($page-1)*$limit;
		//数据
		$arr=json_decode(json_encode($obj->select('leave',$where,$offet,$limit)),true);
		return view('back.leave_list_ajax',['arr'=>$arr,'totalpage'=>$totalpage,'count'=>$count,'page'=>$page]);
	}		
	//即点即改
	public function clickup(){
		$leave_id=$_GET['leave_id'];
		$status=$_GET['status'];
		if($status=="显示"){
			$status=0;
		}else{
			$status=1;
		}
		$arr['status']=$status;
		$obj=new LeaveModel();
		$mail=new Mailer();
		print_r($obj);die;
		$res=$obj->upd('leave',$arr,"`leave_id`=$leave_id");
		if($res){
			echo 1;die;
		}
	}
	//发送邮件
	public function sendmail($leave_id){
		$obj=new LeaveModel();
		$arr=json_decode(json_encode($obj->get('leave',"`leave_id`=$leave_id")),true);
		return view('back.leave_mail',['arr'=>$arr]);

	}
	//邮件
	public function sendmaildo(){
		$arr=$_POST;
		// print_r($arr);
		Mail::to("768100410@qq.com");
		print_r($mail);die;
	}
	//删除
	public function del($leave_id){
		if(!$leave_id){
			echo "删除失败！";die;
		}
		$obj=new LeaveModel();
		$res=$obj->del('leave',"`leave_id`=$leave_id");
		if($res){
			echo "删除成功";
			return redirect('backleave/index');
		}
	}		
	//批删
	public function pidel(){
		$str=$_GET['str'];
		$obj=new LeaveModel();
		$res=$obj->pidel('leave',"`leave_id` in ($str)");
		if($res){
			echo 1;die;
		}

	}		
}


 ?>