<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Categoria;
use App\Policies\CategoriaPolicy;

class AuthServiceProvider extends ServiceProvider {
    protected $policies = [
        'App\Models\Categoria' => 'App\Policies\CategoriaPolicy',
    ];

    public function boot() {
        $this->registerPolicies();
    }
}