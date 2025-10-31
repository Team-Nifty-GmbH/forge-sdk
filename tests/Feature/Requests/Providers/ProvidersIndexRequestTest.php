<?php

use TeamNifty\Forge\Requests\Providers\ProvidersIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ProvidersIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(ProvidersIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ProvidersIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ProvidersIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
