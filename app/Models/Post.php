<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    const IMAGE_PATH = "public/images/posts";

    protected $fillable = [
        'title',
        'link',
        'image_path'
    ];

    public function getImageAttribute()
    {
        return Storage::url($this->image_path);
    }
}
