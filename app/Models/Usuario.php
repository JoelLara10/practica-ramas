<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuario extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'email',
        'name', 
        'password',
    ];

    protected $primaryKey = 'id';

    // Si queremos que modifique los ultimos dos o no
    public $timestaps = false;

    protected $hidden = [
        'created_at', 
        'updated_at', 
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
