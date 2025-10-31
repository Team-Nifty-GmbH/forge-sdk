<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersArchivesDestroyRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersArchivesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersArchivesDestroyRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersArchivesDestroyRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
