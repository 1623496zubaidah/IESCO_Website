<?php

namespace App\Providers;

use App\Project;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $projects = Project::all();
        
        if(isset($projects) && !is_null($projects) ) {

            foreach ($projects as $project) {
    
                if ((Carbon::now()->isoFormat('YYYY-MM-DD') >= $project->dateToBeReady || $project->published == true || ($project->paidBudget >= $project->neededBudget)) && $project->dateToBeReady != null) {
                    $project->published = true;
                    $project->save();
                } else if ($project->dateToBeReady == null) {
                    $project->published = false;
                    $project->save();
                } else {
                    $project->published = false;
                    $project->save();
                }
            }
        }
    }
}
