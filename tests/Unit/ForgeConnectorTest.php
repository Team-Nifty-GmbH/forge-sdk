<?php

use TeamNifty\Forge\Forge;

it('instantiates with bearer token', function () {
    $forge = new Forge(bearerToken: 'test-token');
    expect($forge)->toBeInstanceOf(Forge::class);
});

it('resolves base URL correctly', function () {
    $forge = new Forge(bearerToken: 'test-token');
    expect($forge->resolveBaseUrl())->toBe('https://forge.laravel.com/api');
});
