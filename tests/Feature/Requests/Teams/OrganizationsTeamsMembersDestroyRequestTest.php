<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsMembersDestroyRequest(organization: 'test-value', team: 1, user: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsMembersDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsMembersDestroyRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsMembersDestroyRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->resolveEndpoint())->toBeString();
});
