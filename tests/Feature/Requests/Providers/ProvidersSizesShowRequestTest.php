<?php

use TeamNifty\Forge\Requests\Providers\ProvidersSizesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ProvidersSizesShowRequest(provider: 1, providerSize: 1);

    expect($request)->toBeInstanceOf(ProvidersSizesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ProvidersSizesShowRequest(provider: 1, providerSize: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ProvidersSizesShowRequest(provider: 1, providerSize: 1);

    expect($request->resolveEndpoint())->toBeString();
});
