<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsMembersShowRequest(organization: 'test-value', team: 1, user: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsMembersShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsMembersShowRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsMembersShowRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->resolveEndpoint())->toBeString();
});
