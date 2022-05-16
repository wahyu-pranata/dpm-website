<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    use HasFactory;

    const IMAGE_PATH = "public/images/documents";
    const FILE_PATH = "public/files/documents";

    protected $table = 'documents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'image_path',
        'file_path',
        'user_id'
    ];

    public function getImageAttribute()
    {
        return Storage::url($this->image_path);
    }

    public function getFileAttribute()
    {
        return Storage::url($this->file_path);
    }
}