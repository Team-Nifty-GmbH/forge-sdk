<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsFpmUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsFpmUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->body()->all())->toBeArray();
});
