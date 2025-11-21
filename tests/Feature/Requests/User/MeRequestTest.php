<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\User\MeRequest;

it('can be instantiated', function (): void {
    $request = new MeRequest();

    expect($request)->toBeInstanceOf(MeRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new MeRequest();

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new MeRequest();

    expect($request->resolveEndpoint())->toBeString();
});
