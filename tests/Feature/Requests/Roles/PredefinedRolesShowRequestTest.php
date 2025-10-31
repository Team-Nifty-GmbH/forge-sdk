<?php

use TeamNifty\Forge\Requests\Roles\PredefinedRolesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new PredefinedRolesShowRequest(role: 1);

    expect($request)->toBeInstanceOf(PredefinedRolesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new PredefinedRolesShowRequest(role: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new PredefinedRolesShowRequest(role: 1);

    expect($request->resolveEndpoint())->toBeString();
});
