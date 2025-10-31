<?php

use TeamNifty\Forge\Requests\Roles\PredefinedRolesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new PredefinedRolesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request)->toBeInstanceOf(PredefinedRolesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new PredefinedRolesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new PredefinedRolesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
