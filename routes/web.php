<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::sesWebhooks('/webhooks/ses');

Route::post('/', function(Request $request) {
    $payload = $request->json()->all(); // Prefer JSON for structured data

    // ... (rest of your code handling SES events)

    // Log the JSON representation of the processed data (replace with your logic)
    Log::info(json_encode($payload, JSON_PRETTY_PRINT)); // Optionally use JSON_PRETTY_PRINT for readability

    return response()->json(['message' => 'SES webhook processed successfully'], 200);
});