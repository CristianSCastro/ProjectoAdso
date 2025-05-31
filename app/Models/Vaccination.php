<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model

{
    use HasFactory;
    protected $fillable=['Vaccination_name','Vaccination_date'];
}
