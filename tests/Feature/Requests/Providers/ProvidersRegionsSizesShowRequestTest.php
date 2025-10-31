<?php

use TeamNifty\Forge\Requests\Providers\ProvidersRegionsSizesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ProvidersRegionsSizesShowRequest(provider: 1, providerRegion: 1, providerSize: 1);

    expect($request)->toBeInstanceOf(ProvidersRegionsSizesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ProvidersRegionsSizesShowRequest(provider: 1, providerRegion: 1, providerSize: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ProvidersRegionsSizesShowRequest(provider: 1, providerRegion: 1, providerSize: 1);

    expect($request->resolveEndpoint())->toBeString();
});
