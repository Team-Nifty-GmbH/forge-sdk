<?php

use TeamNifty\Forge\Requests\Roles\PermissionsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new PermissionsShowRequest(permission: 1);

    expect($request)->toBeInstanceOf(PermissionsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new PermissionsShowRequest(permission: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new PermissionsShowRequest(permission: 1);

    expect($request->resolveEndpoint())->toBeString();
});
