<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpVersionsUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->body()->all())->toBeArray();
});
