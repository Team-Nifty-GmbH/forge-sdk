<?php

use TeamNifty\Forge\Requests\Sites\SitesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new SitesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(SitesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new SitesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new SitesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
