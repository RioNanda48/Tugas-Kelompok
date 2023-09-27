<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cosplayer extends Model
{
    use HasFactory;

    protected $table = 'cosplayer';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}