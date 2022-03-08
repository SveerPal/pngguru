<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_Category extends Model
{
    use HasFactory;

    protected $table = 'image_categories';
    
    protected $fillable = [
        'name','slug','parent_id','featured','menu','banner','image_png','image_webp','image_jpg','meta_title','meta_description','meta_keywords','description','alt'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
    
    public function parent()
    {
        return $this->hasOne('App\Models\Image_Category', 'parent_id', 'id');
    }
 
    public function children()
    {
        return $this->hasMany('App\Models\Image_Category','parent_id', 'id');
    }
    
}
