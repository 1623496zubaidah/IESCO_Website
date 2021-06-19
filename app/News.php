<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    
    public $table = 'news';

    protected $fillable = [
        'news_id',
        'title',
        'desc',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
