<?php 
namespace App\Back;
use Illuminate\Database\Eloquent\Model;
use DB;
class ColumnModel extends Model{
	public function find(){
		$arr=DB::select("select * from `column`");
	}
}

 ?>