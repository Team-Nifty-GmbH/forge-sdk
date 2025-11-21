<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Providers\ProvidersRegionsSizesIndexRequest;

it('can be instantiated', function (): void {
    $request = new ProvidersRegionsSizesIndexRequest(provider: 1, providerRegion: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(ProvidersRegionsSizesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new ProvidersRegionsSizesIndexRequest(provider: 1, providerRegion: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new ProvidersRegionsSizesIndexRequest(provider: 1, providerRegion: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
