<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Forge API Token
    |--------------------------------------------------------------------------
    |
    | Your Laravel Forge API token. You can create one in your Forge account
    | under API > API Tokens. This token is used to authenticate all API
    | requests to the Laravel Forge API.
    |
    */

    'api_token' => env('FORGE_API_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | OAuth Client Credentials
    |--------------------------------------------------------------------------
    |
    | If you're using OAuth for authentication instead of API tokens, you can
    | configure your OAuth client credentials here.
    |
    */

    'oauth' => [
        'client_id' => env('FORGE_OAUTH_CLIENT_ID'),
        'client_secret' => env('FORGE_OAUTH_CLIENT_SECRET'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Organization
    |--------------------------------------------------------------------------
    |
    | You can optionally set a default organization ID that will be used
    | when making API calls. This can be overridden per request.
    |
    */

    'default_organization' => env('FORGE_DEFAULT_ORGANIZATION'),
];
