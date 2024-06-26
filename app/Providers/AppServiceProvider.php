<?php

namespace App\Providers;

use App\Contracts\FlowContract;
use App\Contracts\TagContract;
use App\Contracts\TaskContract;
use App\Contracts\TeamContract;
use App\Facades\Teams;
use App\Services\FlowService;
use App\Services\TagService;
use App\Services\TaskService;
use App\Services\TeamService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TeamContract::class, TeamService::class);
        $this->app->bind(TagContract::class, TagService::class);
        $this->app->bind(FlowContract::class, FlowService::class);
        $this->app->bind(TaskContract::class, TaskService::class);
        $this->app->bind('flows', FlowContract::class);
        $this->app->bind('tasks', TaskContract::class);
        $this->app->bind('teams', TeamContract::class);
        $this->app->bind('tags', TagContract::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::anonymousComponentPath(resource_path('views/blade'));
        Blade::setPath(resource_path('views/blade'));

        Validator::extend('unique_team_flow', function ($attribute, $value, $parameters, $validator) {
            $flowId = $parameters[0] ?? null;

            if ($flowId) {
                return ! Teams::isFlowHasTeam($flowId, $value);
            }

            return false;
        });
    }
}
