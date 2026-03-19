<?php

/*
|--------------------------------------------------------------------------
| Architecture Tests
|--------------------------------------------------------------------------
|
| Enforce architectural rules across the application.
|
*/

arch('controllers do not use raw DB facade')
    ->expect('App\Http\Controllers')
    ->not->toUse(['DB']);

arch('models extend Eloquent Model')
    ->expect('App\Models')
    ->toExtend('Illuminate\Database\Eloquent\Model')
    ->ignoring('App\Models\User');

arch('no env() usage outside config')
    ->expect('env')
    ->not->toBeUsedIn(['App']);
