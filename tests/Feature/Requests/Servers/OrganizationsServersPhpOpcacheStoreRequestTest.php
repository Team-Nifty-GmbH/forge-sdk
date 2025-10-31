<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpOpcacheStoreRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpOpcacheStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpOpcacheStoreRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpOpcacheStoreRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpOpcacheStoreRequest(organization: 'test-value', server: 1);

    expect($request->body()->all())->toBeArray();
});
