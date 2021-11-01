<?php

namespace BilawalSh\ArtisanCommand;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class ArtisanCallController extends Controller
{
    public function makeCast($name)
    {
        Artisan::call('make:cast', ['name' => $name]);
        return $name  . " Cast created successfully";
    }
    public function makeChannel($name)
    {
        Artisan::call('make:channel', ['name' => $name]);
        return $name  . " channel created successfully";
    }
    public function makeCommand($name)
    {
        Artisan::call('make:command', ['name' => $name]);
        return $name  . " Command created successfully";
    }
    public function makeComponent($name)
    {
        Artisan::call('make:component', ['name' => $name]);
        return $name  . " Component created successfully";
    }
    public function makeController($name)
    {
        if (!Str::contains($name, 'Controller')) {
            $name = $name . 'Controller';
        }
        Artisan::call('make:controller', ['name' => $name]);
        return $name  . " Controller created successfully";
    }
    public function makeEvent($name)
    {
        Artisan::call('make:event', ['name' => $name]);
        return $name  . " Event created successfully";
    }
    public function makeException($name)
    {
        Artisan::call('make:exception', ['name' => $name]);
        return $name  . " Exception created successfully";
    }
    public function makeFactory($name)
    {
        Artisan::call('make:factory', ['name' => $name]);
        return $name  . " Factory created successfully";
    }
    public function makeJob($name)
    {
        Artisan::call('make:job', ['name' => $name]);
        return $name  . " Job created successfully";
    }
    public function makeListener($name)
    {
        Artisan::call('make:listener', ['name' => $name]);
        return $name  . " Listener created successfully";
    }
    public function makeMail($name)
    {
        Artisan::call('make:mail', ['name' => $name . "Mail"]);
        return "Mail created successfully";
    }
    public function makeMiddleware($name)
    {
        Artisan::call('make:middleware', ['name' => $name]);
        return $name  . " Middleware created successfully";
    }
    public function makeMigration($name)
    {
        Artisan::call('make:migration', ['name' => 'create_' . $name . 's_tables']);
        return "Migration created successfully";
    }
    public function makeModel($name)
    {
        Artisan::call('make:model', ['name' => $name]);
        return $name  . " Model created successfully";
    }
    public function makeNotification($name)
    {
        Artisan::call('make:notification', ['name' => $name]);
        return $name  . "  Notification created successfully";
    }
    public function makeObserver($name)
    {
        Artisan::call('make:observer', ['name' => $name]);
        return $name  . " Observer created successfully";
    }
    public function makePolicy($name)
    {
        Artisan::call('make:policy', ['name' => $name]);
        return $name  . " Policy created successfully";
    }
    public function makeProvider($name)
    {
        Artisan::call('make:provider', ['name' => $name . 'ServiceProvider']);
        return $name  . " Provider created successfully";
    }
    public function makeRequest($name)
    {
        Artisan::call('make:request', ['name' => $name]);
        return $name  . " Request created successfully";
    }
    public function makeResource($name)
    {
        Artisan::call('make:resource', ['name' => $name]);
        return $name  . " Resource created successfully";
    }
    public function makeRule($name)
    {
        Artisan::call('make:rule', ['name' => $name]);
        return $name  . "  test created successfully";
    }
    public function makeSeeder($name)
    {
        Artisan::call('make:seeder', ['name' => $name]);
        return $name  . "  created successfully";
    }
    public function makeTest($name)
    {
        Artisan::call('make:test', ['name' => $name]);
        return $name  . "  created successfully";
    }
    public function packageDiscover()
    {
        Artisan::call('package:discover');
        return "Rebuild the cached package manifest successfully";
    }
    public function StorageLink()
    {
        Artisan::call('storage:link');
        return "Storage link created successfully";
    }
    public function optimize()
    {
        Artisan::call('optimize');
        return "Cache optimize successfully";
    }
    public function optimizeClear()
    {
        Artisan::call('optimize:clear');
        return "Remove the cached bootstrap files successfully";
    }
    public function cacheClear()
    {
        Artisan::call('cache:clear');
        return "Cache cleared successfully";
    }
    public function routeClear()
    {
        Artisan::call('route:clear');
        return "Route cache clear created successfully";
    }
    public function configClear()
    {
        Artisan::call('config:clear');
        return "Congig cache cleared successfully";
    }
    public function configCache()
    {
        Artisan::call('config:cache');
        return "Config cached successfully";
    }
    public function down()
    {
        Artisan::call('down');
        return "Application is in maintenance Mode";
    }
    public function up()
    {
        Artisan::call('up');
        return "Application out of maintenance mode.";
    }
}
