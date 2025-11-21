<?php

use TeamNifty\Forge\Forge;

it('instantiates with bearer token', function (): void {
    $forge = new Forge(bearerToken: 'test-token');
    expect($forge)->toBeInstanceOf(Forge::class);
});

it('resolves base URL correctly', function (): void {
    $forge = new Forge(bearerToken: 'test-token');
    expect($forge->resolveBaseUrl())->toBe('https://forge.laravel.com/api');
});
