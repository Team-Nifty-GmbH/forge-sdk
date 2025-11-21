<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\SitesIndexRequest;

it('can be instantiated', function (): void {
    $request = new SitesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(SitesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new SitesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new SitesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
