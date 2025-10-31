<?php

use TeamNifty\Forge\Requests\Roles\PermissionsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new PermissionsIndexRequest(pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(PermissionsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new PermissionsIndexRequest(pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new PermissionsIndexRequest(pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
