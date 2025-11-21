<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Providers\ProvidersSizesShowRequest;

it('can be instantiated', function (): void {
    $request = new ProvidersSizesShowRequest(provider: 1, providerSize: 1);

    expect($request)->toBeInstanceOf(ProvidersSizesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new ProvidersSizesShowRequest(provider: 1, providerSize: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new ProvidersSizesShowRequest(provider: 1, providerSize: 1);

    expect($request->resolveEndpoint())->toBeString();
});
