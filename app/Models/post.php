<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class post extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id','title','content','photo','slug'];
    protected $dates = ['deleted_at'];
    public function user()
    {
       return $this->belongsTo('App\models\user','user_id');
    }
}
