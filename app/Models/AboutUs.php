<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutUs extends Model
{
    //
    use HasFactory;

    protected $fillable = ['title', 'content', 'image_path', 'additional_image_path'];
}
