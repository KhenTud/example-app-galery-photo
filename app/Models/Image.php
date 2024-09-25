<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table ='';

    protected $fillable = [
        'id',
        'title',
        'path',
        'post_id'
    ];
}
