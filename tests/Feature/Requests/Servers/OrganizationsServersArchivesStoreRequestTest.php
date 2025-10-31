<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersArchivesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request->body()->all())->toBeArray();
});
