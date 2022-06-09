<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    use HasFactory;

    protected $fillable = ['medicine','user_id','expire_at','code'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
