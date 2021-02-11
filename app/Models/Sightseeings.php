<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sightseeings extends Model
{
    protected $table = "sightseeings";
    protected $fillable = [
        'title', 'article', 'imageLink'
    ];
}
