<?php

namespace SitiWeb\ErrorLogger;

use Illuminate\Support\Facades\Http;

class ErrorLogger
{
    public static function log($message, $context = [])
    {
        Http::post(config('errorlogger.api_url'), [
            'message' => $message,
            'context' => $context,
            'app' => config('app.name'),
            'api_key' => config('errorlogger.api_key'),
        ]);
    }
}
