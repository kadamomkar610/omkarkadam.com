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
        'client_id' => '507901882922414',
        'client_secret' => 'efff87b1a3915290bd42a06f37c29260',
        'redirect' => 'http://omkarkadam.com/login/facebook/callback',
    ],


    // 'facebook' => [
    // 'client_id' => '1951696178438061',
    // 'client_secret' => 'aa8db2e3bbc9fea951424780d36ebb3d',
    // 'redirect' => 'http://omkarkadam.com/login/facebook/callback',
    // ],

    'google' => [
        'client_id' => '272824372707-l13g16uvl1hd62m42bg8g00nog6cfl0d.apps.googleusercontent.com',
        'client_secret' => '6Sjhszi8fF1EKcHF2erPNwhU',
        'redirect' => 'http://omkarkadam.com/login/google/callback',
    ],

    'linkedin' => [
        'client_id' => '81982j6hv3ozm2',
        'client_secret' => 'OnlUBqH81j3PvPjD',
        'redirect' => 'http://omkarkadam.com/login/linkedin/callback',
    ],

];
