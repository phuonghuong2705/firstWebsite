<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserStatus extends Model
{
    protected $table = 'users_status';

    const STATUS = [
        'ACTIVE' => 1,
        'NOTACTIVE' => 0,
    ];

    public function User(){
        return $this->hasMany(User::class, 'status_id', 'id');
    }
}
