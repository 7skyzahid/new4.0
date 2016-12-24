<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // Using Closure based composers
				 view()->composer('layouts.notifications', function ($view) {
				$notifications = DB::table('bid_notifications')
					->where('author', Auth::user()->name)->get();

				if (count($notifications) > 0) {
					$view->class = 'notification-circle';
				} else {
					$view->class = '';
				}

				$view->notifications = $notifications;
			});
       
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
