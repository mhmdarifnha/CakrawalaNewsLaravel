<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'author', 'slug', 'body'];
    protected $guarded = [];
}
