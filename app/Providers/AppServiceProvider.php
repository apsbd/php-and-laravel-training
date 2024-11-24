<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
        //Define a Gate for for update and delete
        Gate::define('update-post', function($user, $post) {
            if($user->hasRole('admin')) {
                return true;
            }

            return $user->id === $post->user_id;
        });

        Gate::define('delete-post', function($user, $post) {
            if($user->hasRole('admin')) {
                return true;
            }

            return $user->id === $post->user_id;
        });
    }
}
