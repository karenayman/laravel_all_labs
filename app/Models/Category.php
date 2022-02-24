<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_path'
    ];
    public $timestamps = false;
    public function comments()
    {
        //defult of laravel is modelname_id (artical_id) 
        return $this->hasMany(Articale::class,'fk_id','id');
        
    }
}
