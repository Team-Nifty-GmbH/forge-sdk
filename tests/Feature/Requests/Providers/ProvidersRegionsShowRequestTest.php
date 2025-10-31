<?php

use TeamNifty\Forge\Requests\Providers\ProvidersRegionsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ProvidersRegionsShowRequest(provider: 1, providerRegion: 1);

    expect($request)->toBeInstanceOf(ProvidersRegionsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ProvidersRegionsShowRequest(provider: 1, providerRegion: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ProvidersRegionsShowRequest(provider: 1, providerRegion: 1);

    expect($request->resolveEndpoint())->toBeString();
});
