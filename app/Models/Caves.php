<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Caves extends Model
{
    protected $table = "caves";
    protected $fillable = [
        'title', 'article', 'imageLink'
    ];
}
