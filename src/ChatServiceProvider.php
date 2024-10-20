<?php
 
namespace Mateo\Rtch;
use Illuminate\Support\ServiceProvider;
 
class ChatServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views/rtch', 'rtch');
        // Publish views
        $this->publishes([
            __DIR__.'/views/rtch' => resource_path('views/rtch'),
        ], 'views');
        $this->publishes([
            __DIR__.'/routes/web.php' => base_path('routes/web.php'),
        ], 'routes');
        $this->publishes([
            __DIR__.'/Http/Controllers/PusherController.php' => app_path('Http/Controllers/PusherController.php'),
        ],'controllers');
        $this->publishes([
            __DIR__.'/Events/PusherBroadcast.php' => app_path('Events/PusherBroadcast.php'),
        ],'events');
    }
    
}