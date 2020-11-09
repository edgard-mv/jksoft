<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-products', function ($user) {
            return $user->role === 1 or $user->role === 2;
        });
        Gate::define('access-providers', function ($user) {
            return $user->role === 1 or $user->role === 2;
        });
        Gate::define('access-sales', function ($user) {
            return $user->role === 1 or $user->role === 3;
        });
        Gate::define('access-statistics', function ($user) {
            return $user->role === 1;
        });
        Gate::define('access-backup', function ($user) {
            return $user->role === 1;
        });
        Gate::define('access-employee', function ($user) {
            return $user->role === 1;
        });
    }
}
