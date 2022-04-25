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

    public function ownedBy(user $user){
        return $user->id === $this->user_id;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
