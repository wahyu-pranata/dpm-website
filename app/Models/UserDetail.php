<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'user_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'religion',
        'faculity',
        'study_program',
        'generation',
        'address',
        'user_id',
        'role_id',
        'birthdate',
        'birthplace'
    ];
}
