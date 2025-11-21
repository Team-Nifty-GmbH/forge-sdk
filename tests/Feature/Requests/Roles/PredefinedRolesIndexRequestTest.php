<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Roles\PredefinedRolesIndexRequest;

it('can be instantiated', function (): void {
    $request = new PredefinedRolesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request)->toBeInstanceOf(PredefinedRolesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new PredefinedRolesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new PredefinedRolesIndexRequest(include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterpermissionsName: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
