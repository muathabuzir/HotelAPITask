<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

    public function register() {
        // Keep the Orders Interfaces before Classes
        $this->app->bind(
            'App\Interfaces\HotelRepositoryInterface',
            'App\Repositories\HotelRepository'
        );
    }

}
