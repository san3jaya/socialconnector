<?php

return [
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('APP_URL').'/social/facebook/token/callback',
        'default_graph_version' => env('FACEBOOK_API_VERSION', 'v13.0'),
    ],
];
