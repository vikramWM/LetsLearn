<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Course;


class HeaderProvider  extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
        public function boot()
    {
        $courses = Course::all();
        view()->share('courses', $courses);

        // Additional boot logic if needed from the original AppServiceProvider
    }
}
