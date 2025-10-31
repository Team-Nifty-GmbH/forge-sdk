<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsCliShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsConfigsCliShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsCliShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsConfigsCliShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsConfigsCliShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->resolveEndpoint())->toBeString();
});
