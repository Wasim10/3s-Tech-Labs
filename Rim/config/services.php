<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

   'facebook' => [
        'client_id' => '595312554246600',
        'client_secret' => 'bb0fe4c510db9ec484a4378b9898ab56',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    
    'twitter' => [
        'client_id' => 'ashEtn2WFKva3NJ7CbO7eVHiH',
        'client_secret' => 'zNa8GTmL3k6k9M6OKfjEo1y3l0mwSWglT12tklZ6jJW9rg0uKw',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

    'google' => [
        'client_id' => '144298980266-ftfd11uf0k9phq793d10q3qrscjfvs5j.apps.googleusercontent.com ',
        'client_secret' => 'WbNmWbeRsTnmGIhxtDJGkD-r',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

];
