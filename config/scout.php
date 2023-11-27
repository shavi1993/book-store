<?php

return [

    'driver' => env('SCOUT_DRIVER', 'elasticsearch'),

    'prefix' => env('SCOUT_PREFIX', ''),

    'queue' => env('SCOUT_QUEUE', true),

    'elasticsearch' => [
        'index' => env('ELASTICSEARCH_INDEX', 'default'),
        'hosts' => [
            env('ELASTICSEARCH_HOST', 'http://localhost'),
        ],
    ],

    // Other configuration options...

];
