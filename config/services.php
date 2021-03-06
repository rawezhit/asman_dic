<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'google' => [
        'client_id' => '304819992897-uj7cq64s1f6pifq2lk03knnovh8inn0m.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://phplaravel-763292-2585240.cloudwaysapps.com/google/callback',
        // 'redirect' => 'http://127.0.0.1:8000/google/callback',
        // 'client_id' => '304819992897-95tkf0gug8lf041ugg1bla59oo25e0qk.apps.googleusercontent.com',
        // 'client_secret' => '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',
        // 'redirect' => 'http://asman.byethost14.com/google/callback',
    ],

];
