<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog_umkm';
    protected $guarded = [
        'id_blog'
    ];

    
}