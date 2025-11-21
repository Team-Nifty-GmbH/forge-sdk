<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsInvitesDestroyRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsInvitesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsInvitesDestroyRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsInvitesDestroyRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->resolveEndpoint())->toBeString();
});
