<?php

use TeamNifty\Forge\Requests\Providers\ProvidersRegionsSizesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ProvidersRegionsSizesIndexRequest(provider: 1, providerRegion: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(ProvidersRegionsSizesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ProvidersRegionsSizesIndexRequest(provider: 1, providerRegion: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ProvidersRegionsSizesIndexRequest(provider: 1, providerRegion: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
