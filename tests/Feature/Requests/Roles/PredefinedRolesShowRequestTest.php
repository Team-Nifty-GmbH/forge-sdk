<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\PredefinedRolesShowRequest;

it('can be instantiated', function (): void {
    $request = new PredefinedRolesShowRequest(role: 1);

    expect($request)->toBeInstanceOf(PredefinedRolesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new PredefinedRolesShowRequest(role: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new PredefinedRolesShowRequest(role: 1);

    expect($request->resolveEndpoint())->toBeString();
});
