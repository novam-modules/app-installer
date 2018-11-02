<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
        Gate::define('view-dashboard', function ($user) {
            return $user->group_id == -1 && $user->acct_id != null;
        });

        Gate::define('do-inventory', function ($user) {
            $mods = $user->account->mods;
            return $mods && isset($mods['inventory']);
        });
        Gate::define('do-project', function ($user) {
            $mods = $user->account->mods;
            return $mods && isset($mods['projects']);
        });
        Gate::define('do-reports', function ($user) {
            $mods = $user->account->mods;
            return $mods && isset($mods['reports']);
        });
        Gate::define('do-operations', function ($user) {
            $mods = $user->account->mods;
            return $mods && isset($mods['operations']);
        });
        Gate::define('do-documedia', function ($user) {
            $mods = $user->account->mods;
            return $mods && isset($mods['documedia']);
        });
    }
}
