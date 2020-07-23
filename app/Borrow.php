<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Borrow extends Model
{
    protected $table='borrows';
    protected $fillable = [ 'user_id' , 'equip_id', 'comedate', 'Return_date', 'borrow_status' ];
    public function equipment(){
        return $this->belongsTo('App\Equipment','equip_id');
    }
    public function users(){
        return $this->belongsTo('App\Users','user_id');
    }
     public static function test($id){
          $data = DB::table('borrows')
          ->join('equipment', 'equipment.equip_id', '=', 'borrows.equip_id')
          ->join('users', 'users.username', '=', 'borrows.user_id')
          ->where('borrows.user_id', $id)
          ->get();
          return $data;

     }
     public static function tests(){
        $data = DB::table('borrows')
        ->join('equipment', 'equipment.equip_id', '=', 'borrows.equip_id')
        ->join('users', 'users.username', '=', 'borrows.user_id')
        ->get();
        return $data;

   }
}
