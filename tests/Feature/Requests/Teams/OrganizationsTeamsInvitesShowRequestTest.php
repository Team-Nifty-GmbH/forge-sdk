<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsInvitesShowRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsInvitesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsInvitesShowRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsInvitesShowRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->resolveEndpoint())->toBeString();
});
