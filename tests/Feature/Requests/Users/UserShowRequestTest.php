<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Users\UserShowRequest;

it('can be instantiated', function (): void {
    $request = new UserShowRequest();

    expect($request)->toBeInstanceOf(UserShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new UserShowRequest();

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new UserShowRequest();

    expect($request->resolveEndpoint())->toBeString();
});
