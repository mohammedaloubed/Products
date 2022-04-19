<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table='profile_users';
    protected $fillable = [ 'province','user_id','gender','bio','facebook'];

    public function user()
    {
       return $this->belongsTo('App\models\user','user_id');
    }
}
