<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\Frs\FrsreportreporsitoryInterface as FrsReportRepositoryInterface;
use App\Services\Repositories\Frs\FrsreportRepository as FrsReportRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FrsReportRepositoryInterface::class, function() {
            return new FrsReportRepository();
        }); 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
