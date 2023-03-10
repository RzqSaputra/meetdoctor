<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeUser extends Model
{
   // use HasFactory;
   use SoftDeletes;
   public $table = 'type_user';

   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];  

   protected $fillable =[
       'name',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

    // One to Many
   public function detaiil_user()
   {
    // 2 Parameter ('Path Model', 'Field Foreign Key')
    return $this->hasMany('App\Models\ManagementAccess\DetailUser', 'type_user_id', 'id');
   }
}
