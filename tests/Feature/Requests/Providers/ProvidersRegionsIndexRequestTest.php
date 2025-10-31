<?php

use TeamNifty\Forge\Requests\Providers\ProvidersRegionsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ProvidersRegionsIndexRequest(provider: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(ProvidersRegionsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ProvidersRegionsIndexRequest(provider: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ProvidersRegionsIndexRequest(provider: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
