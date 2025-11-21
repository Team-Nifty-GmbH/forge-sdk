<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsTeamsInvitesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsTeamsInvitesStoreRequest(organization: 'test-value', team: 1, roleId: 1, email: 'test-value');

    expect($request->body()->all())->toBeArray();
});
