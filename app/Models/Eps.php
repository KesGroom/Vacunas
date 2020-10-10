<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Eps extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'eps';
    protected $fillable = [

        'name',
        'address',
        'phone',
        'code_access',
        'password'

    ];

    protected $hidden = [
        'password',
    ];
}
