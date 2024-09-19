<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'email',
        'name'
    ];

    //protected $primaryKey = 'id';

    // Si queremos que modifique los ultimos dos o no
    public $timestaps = false;

    protected $hidden = ['created_at', 'updated_at'];

}
