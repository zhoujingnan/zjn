<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TestController extends Controller{
	public function index(){echo 4;die;
		return view("backindex.index");
	}
}



 ?>