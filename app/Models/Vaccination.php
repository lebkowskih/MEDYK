<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer',
        'date',
        'isAvailable',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');

}
}