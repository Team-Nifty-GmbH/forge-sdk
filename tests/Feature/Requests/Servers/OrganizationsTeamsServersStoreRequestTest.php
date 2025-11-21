<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsTeamsServersStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServersStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request->body()->all())->toBeArray();
});
