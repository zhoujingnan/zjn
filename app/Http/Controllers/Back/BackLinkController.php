<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use App\Back\LinkModel;
use DB;
class BackLinkController extends BackCommonController{
	public function add(){
         return view("back.linkadd");
	}
	public function adddo(){
		$link_type = isset($_POST['link_type'])?htmlspecialchars($_POST['link_type'],ENT_QUOTES ):"";
		$net_name = isset($_POST['net_name'])?htmlspecialchars($_POST['net_name'],ENT_QUOTES ):"";
	    $net_url = isset($_POST['net_url'])?htmlspecialchars($_POST['net_url'],ENT_QUOTES ):"";
	    $net_desc = isset($_POST['net_desc'])?htmlspecialchars($_POST['net_desc'],ENT_QUOTES ):"";
	    $net_logo = isset($_POST['net_logo'])?htmlspecialchars($_POST['net_logo'],ENT_QUOTES ):"";
	    $img = $_FILES;
	    //var_dump($_POST);die;
	    if(empty($img)){
			$net_logo = $net_logo;
		}else{
			if($img['net_logo']['error']==0){
				$postfix = substr($img['net_logo']['name'],strpos($img['net_logo']['name'],'.'));
				$net_logo = "images/".time()."-".rand(1000,9999).$postfix;
				move_uploaded_file($_FILES["net_logo"]["tmp_name"],  $net_logo);
			}
		}
		$res = DB::insert('insert into `link`(net_name,link_type,net_url,net_desc,net_logo) values(?,?,?,?,?)',["$net_name","$link_type","$net_url","$net_desc","$net_logo"]);
		//echo $res;die;
		if($res){
			return redirect('backlink/show');
		}
	}
   public function show(){
		$data = DB::select('select * from `link`');
		$data = json_decode(json_encode($data), true);
		//var_dump($data);
		return view("back.linkshow",array('arr'=>$data));
	}
	public function del(){
        $id = $_GET['id'];
		$res = DB::delete("delete from `link` where link_id=$id");
		if($res){
			return 1;
		}
	}
   }

?>