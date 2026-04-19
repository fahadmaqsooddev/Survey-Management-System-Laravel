<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
class AdminRouteServiceProvider extends ServiceProvider
{
      /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->mapAdminRoutes();
    }

    /**
     * Map admin routes.
     */
    protected function mapAdminRoutes(): void
    {
        Route::middleware('web')
            ->prefix('admin')
            ->group(base_path('routes/admin_routes/admin.php'));
    }
}
