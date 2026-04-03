<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function () {
    $time = now()->format('Y-m-d H:i:s');
    Log::info("Hello Kidd, the time now is: {$time}");
})->everyMinute();
