<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Castles extends Model
{
    protected $table = "castles";
    protected $fillable = [
        'title', 'article', 'imageLink'
    ];
}
