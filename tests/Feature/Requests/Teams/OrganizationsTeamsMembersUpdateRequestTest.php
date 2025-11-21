<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsMembersUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsTeamsMembersUpdateRequest(organization: 'test-value', team: 1, user: 1, roleId: 1);

    expect($request->body()->all())->toBeArray();
});
