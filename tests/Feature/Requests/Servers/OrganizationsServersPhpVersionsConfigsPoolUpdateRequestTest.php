<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsPoolUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsPoolUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: NULL);

    expect($request->body()->all())->toBeArray();
});
