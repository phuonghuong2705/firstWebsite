<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserStatus;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function status(){
        return $this->belongsTo(UserStatus::class, 'status_id', 'id');
    }

    // Scope tìm kiếm theo tên
    public function scopeSearchByName(Builder $query, $search)
    {
        if (!empty($search)) {
            return $query->where('users.name', 'like', "%$search%");
        }
        return $query;
    }

    // Scope lọc theo permission
    public function scopeFilterByPermission(Builder $query, $permission)
    {
        if (!empty($permission)) {
            return $query->where('user_permission.permission', '=', $permission);
        }
        return $query;
    }

    // Scope lọc theo status
    public function scopeFilterByStatus(Builder $query, $status)
    {
        if (!empty($status)) {
            return $query->where('users_status.status', '=', $status);
        }
        return $query;
    }
}
