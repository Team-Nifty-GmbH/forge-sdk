<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request->body()->all())->toBeArray();
});
