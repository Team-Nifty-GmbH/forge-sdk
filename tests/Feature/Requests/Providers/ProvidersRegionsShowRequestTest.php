<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Providers\ProvidersRegionsShowRequest;

it('can be instantiated', function (): void {
    $request = new ProvidersRegionsShowRequest(provider: 1, providerRegion: 1);

    expect($request)->toBeInstanceOf(ProvidersRegionsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new ProvidersRegionsShowRequest(provider: 1, providerRegion: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new ProvidersRegionsShowRequest(provider: 1, providerRegion: 1);

    expect($request->resolveEndpoint())->toBeString();
});
