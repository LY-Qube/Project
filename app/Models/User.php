<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property string last_name
 * @property string first_name
 * @property string full_name
 * @property string email
 * @property string password
 * @property string avatar
 * @property string profile_image
 * @property Information information
 * @property string job_position
 * Class User
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'password',
        'avatar',
        'job_position'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute(): string
    {
        return strtoupper($this->last_name) . ' ' . ucfirst($this->first_name);
    }

    public function getProfileImageAttribute(): string
    {
        if ($this->avatar){
            return 'storage/' . $this->avatar;
        }
        return "images/user-icon.jpg";
    }

    public function information()
    {
        return $this->hasOne(Information::class);
    }

    public function registers()
    {
        return $this->hasMany(Register::class,'creator_id');
    }
}
