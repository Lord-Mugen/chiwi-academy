<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'timeMeet',
        'maxCupos',
        'description',
        'image',
        'destacada',
        'disponible',
    ];
}
