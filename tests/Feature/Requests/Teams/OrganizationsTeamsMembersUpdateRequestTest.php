<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsMembersUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request->body()->all())->toBeArray();
});
