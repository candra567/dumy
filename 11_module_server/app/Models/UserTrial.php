<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTrial extends Model
{
    use HasFactory;
    protected $table='table_users_trial';
    protected $guarded=['id_users'];
}
