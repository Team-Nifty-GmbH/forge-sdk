<?php

use TeamNifty\Forge\Forge;

it('forge helper accepts custom token', function (): void {
    $forge = forge('custom-token');

    expect($forge)->toBeInstanceOf(Forge::class);
});

it('forge helper returns different instances when different tokens provided', function (): void {
    $forge1 = forge('token-1');
    $forge2 = forge('token-2');

    expect($forge1)->not->toBe($forge2);
});

it('forge helper resolves from container when no token provided', function (): void {
    app()->singleton(Forge::class, function () {
        return new Forge(bearerToken: 'container-token');
    });

    $forge = forge();

    expect($forge)->toBeInstanceOf(Forge::class);
});

it('does not redeclare the forge helper when loaded twice', function (): void {
    require __DIR__ . '/../../src/helpers.php';

    expect(function_exists('forge'))->toBeTrue();
});
