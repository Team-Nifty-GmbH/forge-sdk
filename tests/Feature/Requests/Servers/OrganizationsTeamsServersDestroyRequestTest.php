<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsTeamsServersDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsServersDestroyRequest(organization: 'test-value', team: 1, server: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServersDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsServersDestroyRequest(organization: 'test-value', team: 1, server: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsServersDestroyRequest(organization: 'test-value', team: 1, server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
