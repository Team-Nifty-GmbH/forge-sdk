<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsCliUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsConfigsCliUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsCliUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsConfigsCliUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsConfigsCliUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpVersionsConfigsCliUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->body()->all())->toBeArray();
});
