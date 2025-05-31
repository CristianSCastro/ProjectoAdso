<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceReport extends Model
{
    use HasFactory;
    protected $fillable = ['Service_date', 'service_comments', 'id_service_appointment'];

}
