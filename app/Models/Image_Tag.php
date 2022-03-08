<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Tag extends Model
{
    use HasFactory;
    protected $table = 'image_tags';

    protected $fillable = [
        'name','slug','featured','menu','banner','image_png','image_webp','image_jpg','meta_title','meta_description','meta_keywords','description','alt'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
}
