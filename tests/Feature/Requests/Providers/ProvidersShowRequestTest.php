<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Providers\ProvidersShowRequest;

it('can be instantiated', function (): void {
    $request = new ProvidersShowRequest(provider: 1);

    expect($request)->toBeInstanceOf(ProvidersShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new ProvidersShowRequest(provider: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new ProvidersShowRequest(provider: 1);

    expect($request->resolveEndpoint())->toBeString();
});
