<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsTeamsInvitesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request->body()->all())->toBeArray();
});
