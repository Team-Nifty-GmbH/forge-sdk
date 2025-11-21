<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsMembersDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsMembersDestroyRequest(organization: 'test-value', team: 1, user: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsMembersDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsMembersDestroyRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsMembersDestroyRequest(organization: 'test-value', team: 1, user: 1);

    expect($request->resolveEndpoint())->toBeString();
});
