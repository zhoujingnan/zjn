<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
class PreModel extends Model{
    public function listAll(){
        $arr=DB::select("select * from aa");
        return $arr;
    }
}
