<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsPoolShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsConfigsPoolShowRequest(organization: 'test-value', server: 1, phpVersion: 1, user: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsPoolShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsConfigsPoolShowRequest(organization: 'test-value', server: 1, phpVersion: 1, user: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsConfigsPoolShowRequest(organization: 'test-value', server: 1, phpVersion: 1, user: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
