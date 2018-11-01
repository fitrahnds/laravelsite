<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CyrildeWit\PageViewCounter\Traits\HasPageViewCounter;

class Post extends Model
{
    use HasPageViewCounter;
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [ 'title', 'body' ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
