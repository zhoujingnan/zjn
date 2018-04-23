<?php 
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Back\BackCommonController;
use App\Back\ColumnModel;
class BackcolumnController extends BackCommonController{
	public function getIndex(){
		$obj=new ColumnModel();
		print_r($obj);
	}
}

?>