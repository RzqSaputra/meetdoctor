<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    // use HasFactory;
   use SoftDeletes;
   public $table = 'role';

   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];  

   protected $fillable =[
       'permission_id',
       'role_id',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   public function permission_role()
   {
    // 2 Parameter ('Path Model', 'Field Foreign Key')
    return $this->hasMany('App\Models\ManagementAccess\PermissionRole', 'role_id');
   }

   public function role_user()
   {
    // 2 Parameter ('Path Model', 'Field Foreign Key')
    return $this->hasMany('App\Models\ManagementAccess\RoleUSer', 'role_id');
   }
   
}
