<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Equipment extends Model
{
   protected $table='equipment';
//   equip_id
// year
// equip_name
 //jurantee
 //equip_status
 //tooltypes_id
 //created_at
 //updated_at
   protected $fillable = [ 'equip_id', 'year', 'equip_name', 'jurantee', 'tooltypes', 'equip_status' ];
   public function borrow(){
       return $this->hasMany('App\Borrow');
   }

}
