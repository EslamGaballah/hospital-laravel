<?php

namespace App\Providers;

use App\Interfaces\Sections\SectionRepositoryInterface; 
use App\Repository\Sections\SectionRepository; 

use App\Interfaces\Doctors\DoctorRepositoryInterface; 
use App\Repository\Doctors\DoctorRepository; 

use App\Interfaces\Services\SingleServiceRepositoryInterface; 
use App\Repository\Services\SingleServiceRepository; 


use Illuminate\Support\ServiceProvider;

class RepositoryServiceprovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SectionRepositoryInterface::class, SectionRepository::class);
        $this->app->bind(DoctorRepositoryInterface::class, DoctorRepository::class);
        $this->app->bind(SingleServiceRepositoryInterface::class, SingleServiceRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
