<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultan extends Model
{
    use HasFactory;
    protected $table='consultations';
    protected $guarded=['id_consultations'];
}
