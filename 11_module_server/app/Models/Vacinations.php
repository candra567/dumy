<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacinations extends Model
{
    use HasFactory;
    protected $table="vaccinations";
    protected $guarded=['id_vaccinations'];
}
