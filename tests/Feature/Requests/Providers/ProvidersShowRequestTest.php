<?php

use TeamNifty\Forge\Requests\Providers\ProvidersShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ProvidersShowRequest(provider: 1);

    expect($request)->toBeInstanceOf(ProvidersShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ProvidersShowRequest(provider: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ProvidersShowRequest(provider: 1);

    expect($request->resolveEndpoint())->toBeString();
});
