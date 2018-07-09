<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /// Table Name
    protected $table = 'category';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
