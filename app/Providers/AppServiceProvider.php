<?php

namespace App\Providers;

use App\Repositories\AccidentReportRepository;
use App\Repositories\AccidentReportRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(AccidentReportRepositoryInterface::class, AccidentReportRepository::class);

    }
}
