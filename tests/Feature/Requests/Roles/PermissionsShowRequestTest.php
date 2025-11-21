<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\PermissionsShowRequest;

it('can be instantiated', function (): void {
    $request = new PermissionsShowRequest(permission: 1);

    expect($request)->toBeInstanceOf(PermissionsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new PermissionsShowRequest(permission: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new PermissionsShowRequest(permission: 1);

    expect($request->resolveEndpoint())->toBeString();
});
