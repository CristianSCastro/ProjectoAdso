<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'petsName', 'id_breeds', 'id_color', 'id_age', 'id_vaccination', 'id_owner',
    ];
}
