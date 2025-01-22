<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'auth.login')->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $panel = Auth::user()->panel_role_id;

        // dd($panel);

        if ($panel == 1) {

            return redirect('/submonitoring');
        } elseif ($panel == 2) {

            return redirect('/jhpadmin');
        } elseif ($panel == 3) {

            return redirect('/jhp');
        }
    });
});
