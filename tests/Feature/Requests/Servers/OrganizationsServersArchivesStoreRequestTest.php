<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersArchivesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersArchivesStoreRequest(organization: 'test-value', serverId: 1);

    expect($request->body()->all())->toBeArray();
});
