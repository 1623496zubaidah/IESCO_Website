<?php

//test
namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public $table = 'projects';

    protected $fillable = [
        'title',
        'targeted',
        'desc',
        'project_id',
        'type',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const TYPE = [
        'projects' => 'Projects',
        'initiatives'  => 'Initiatives',
        'campaigns' => 'Campaigns'
                
            ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}
