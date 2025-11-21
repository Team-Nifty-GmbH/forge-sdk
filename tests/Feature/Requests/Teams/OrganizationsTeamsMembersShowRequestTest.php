<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsMembersShowRequest(organization: 'test-value', team: 1, user: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsMembersShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsMembersShowRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsMembersShowRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->resolveEndpoint())->toBeString();
});
