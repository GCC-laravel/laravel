<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'users_profile';
    protected $primaryKey = 'user_profile_id';
    protected $connection = 'mysql_1';
    use HasFactory;
}
