<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Providers\ProvidersRegionsSizesShowRequest;

it('can be instantiated', function (): void {
    $request = new ProvidersRegionsSizesShowRequest(provider: 1, providerRegion: 1, providerSize: 1);

    expect($request)->toBeInstanceOf(ProvidersRegionsSizesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new ProvidersRegionsSizesShowRequest(provider: 1, providerRegion: 1, providerSize: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new ProvidersRegionsSizesShowRequest(provider: 1, providerRegion: 1, providerSize: 1);

    expect($request->resolveEndpoint())->toBeString();
});
