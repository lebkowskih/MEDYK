<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = ['medicine','user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
