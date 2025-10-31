<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsInvitesShowRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsInvitesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsInvitesShowRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsInvitesShowRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->resolveEndpoint())->toBeString();
});
