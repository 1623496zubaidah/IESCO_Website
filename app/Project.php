<?php

//test
namespace App;

use Carbon\Carbon;
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
        'neededBudget',
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
    // public static function boot()
    // {
    //     parent::boot();
    //     $projects = static::select(['dateToBeReady', 'published'])->get();
    //     foreach ($projects as $project) {
    //         if (Carbon::now()->isoFormat('YYYY-MM-DD') >= $project->dateToBeReady) {
    //             $project->published = true;
    //         }
    //     }
    // }
    public function donation()
    {
        return $this->hasMany("App\Donation");
    }
    public function getPercentAttribute()
    {

        $cal = 100 - ((($this->neededBudget - $this->paidBudget) / $this->neededBudget) * 100);
        return   number_format((float)$cal, 2, '.', '');;
    }
}
