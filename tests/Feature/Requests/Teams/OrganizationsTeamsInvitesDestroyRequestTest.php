<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsInvitesDestroyRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsInvitesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsInvitesDestroyRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsInvitesDestroyRequest(organization: 'test-value', team: 1, invitation: 1);

    expect($request->resolveEndpoint())->toBeString();
});
