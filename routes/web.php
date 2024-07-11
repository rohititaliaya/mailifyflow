<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::sesWebhooks('/webhooks/ses');

Route::post('/', function(Request $request) {
    $json = $request->all();
    Log::info($json);
});
