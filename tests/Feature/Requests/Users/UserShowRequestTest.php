<?php

use TeamNifty\Forge\Requests\Users\UserShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new UserShowRequest();

    expect($request)->toBeInstanceOf(UserShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new UserShowRequest();

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new UserShowRequest();

    expect($request->resolveEndpoint())->toBeString();
});
