<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use App\Models\UserActivity;
use App\Models\UserDetail;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserOrganization;
use App\Models\UserMovement;
use App\Models\UserAchievement;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const IMAGE_PATH = "public/images/users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image_path'
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

    public function getImageAttribute()
    {
        return Storage::url($this->image_path);
    }

    public function getStatusAttribute($value)
    {
        return $value ? "Active" : "Not Active";   
    }

    public function activities()
    {
        return $this->hasMany(UserActivity::class);
    }

    public function detail()
    {
        return $this->hasOne(UserDetail::class);
    }

    public function educations()
    {
        return $this->hasMany(UserEducation::class);
    }

    public function experiences()
    {
        return $this->hasMany(UserExperience::class);
    }

    public function organizations()
    {
        return $this->hasMany(UserOrganization::class);
    }

    public function movements()
    {
        return $this->hasMany(UserMovement::class);
    }

    public function achievements()
    {
        return $this->hasMany(UserAchievement::class);
    }

    public function isSuperAdmin()
    {
        return $this->role == 'SUPER_ADMIN';
    }
}
