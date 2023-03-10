<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;
    use SoftDeletes;
    public $table = 'specialist';
 
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];  
 
    protected $fillable =[
        'name',
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // One to Many
   public function doctor()
   {
    // 2 Parameter ('Path Model', 'Field Foreign Key')
    return $this->hasMany('App\Models\Operational\Doctor', 'specialist_id');
   }
}
