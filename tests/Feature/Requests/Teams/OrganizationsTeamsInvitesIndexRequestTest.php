<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsInvitesIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsInvitesIndexRequest(organization: 'test-value', team: 1, include: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsTeamsInvitesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsInvitesIndexRequest(organization: 'test-value', team: 1, include: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsInvitesIndexRequest(organization: 'test-value', team: 1, include: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
