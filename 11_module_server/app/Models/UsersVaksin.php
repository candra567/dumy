<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersVaksin extends Model
{
    use HasFactory;
    protected $table='societies';
    protected $guarded=['id_societies'];
    protected $primaryKey='id_societies';
}
