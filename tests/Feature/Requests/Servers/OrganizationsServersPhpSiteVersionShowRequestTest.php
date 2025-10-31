<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpSiteVersionShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpSiteVersionShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpSiteVersionShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpSiteVersionShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpSiteVersionShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
