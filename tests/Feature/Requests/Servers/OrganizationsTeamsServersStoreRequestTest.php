<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsTeamsServersStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServersStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsTeamsServersStoreRequest(organization: 'test-value', team: 1, serverId: 1);

    expect($request->body()->all())->toBeArray();
});
