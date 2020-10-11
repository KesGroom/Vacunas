<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}
