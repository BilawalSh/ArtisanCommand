<?php

use Illuminate\Support\Facades\Route;
use BilawalSh\ArtisanCommand\ArtisanCallController;

Route::get('cast/{name}', [ArtisanCallController::class, 'makeCast'])->name('cast');
Route::get('channel/{name}', [ArtisanCallController::class, 'makeChannel'])->name('channel');
Route::get('command/{name}', [ArtisanCallController::class, 'makeCommand'])->name('command');
Route::get('component/{name}', [ArtisanCallController::class, 'makeComponent'])->name('component');
Route::get('controller/{name}', [ArtisanCallController::class, 'makeController'])->name('controller');
Route::get('event/{name}', [ArtisanCallController::class, 'makeEvent'])->name('event');
Route::get('exception/{name}', [ArtisanCallController::class, 'makeException'])->name('exception');
Route::get('factory/{name}', [ArtisanCallController::class, 'makeFactory'])->name('factory');
Route::get('job/{name}', [ArtisanCallController::class, 'makeJob'])->name('job');
Route::get('listener/{name}', [ArtisanCallController::class, 'makeListener'])->name('listener');
Route::get('mail/{name}', [ArtisanCallController::class, 'makeMail'])->name('mail');
Route::get('middleware/{name}', [ArtisanCallController::class, 'makeMiddleware'])->name('middleware');
Route::get('migration/{name}', [ArtisanCallController::class, 'makeMigration'])->name('migration');
Route::get('model/{name}', [ArtisanCallController::class, 'makeModel'])->name('model');
Route::get('notification/{name}', [ArtisanCallController::class, 'MakeNotification'])->name('notification');
Route::get('observer/{name}', [ArtisanCallController::class, 'makeObserver'])->name('observer');
Route::get('policy/{name}', [ArtisanCallController::class, 'makePolicy'])->name('policy');
Route::get('provider/{name}', [ArtisanCallController::class, 'makeProvider'])->name('provider');
Route::get('request/{name}', [ArtisanCallController::class, 'makeRequest'])->name('request');
Route::get('resource/{name}', [ArtisanCallController::class, 'makeResource'])->name('resource');
Route::get('rule/{name}', [ArtisanCallController::class, 'makeRule'])->name('rule');
Route::get('seeder/{name}', [ArtisanCallController::class, 'makeSeeder'])->name('seeder');
Route::get('seeder/{name}', [ArtisanCallController::class, 'makeSeeder'])->name('seeder');
Route::get('test/{name}', [ArtisanCallController::class, 'makeTest'])->name('test');

// package command
Route::get('package-discover', [ArtisanCallController::class, 'packageDiscover'])->name('package-discover');

Route::get('storage-link', [ArtisanCallController::class, 'makeStorageLink'])->name('storage-link');
Route::get('optimize', [ArtisanCallController::class, 'optimize'])->name('optimize');
Route::get('optimize-clear', [ArtisanCallController::class, 'optimizeClear'])->name('optimize-clear');
Route::get('route-clear', [ArtisanCallController::class, 'routeClear'])->name('route-clear');
Route::get('cache-clear', [ArtisanCallController::class, 'cacheClear'])->name('cahce-clear');
Route::get('config-clear', [ArtisanCallController::class, 'configClear'])->name('config-clear');
Route::get('config-cache', [ArtisanCallController::class, 'configCahe'])->name('config-cache');
Route::get('down', [ArtisanCallController::class, 'down'])->name('down');
Route::get('up', [ArtisanCallController::class, 'up'])->name('up');
