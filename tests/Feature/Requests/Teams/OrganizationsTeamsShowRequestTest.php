<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsShowRequest(organization: 'test-value', team: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsShowRequest(organization: 'test-value', team: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsShowRequest(organization: 'test-value', team: 1);

    expect($request->resolveEndpoint())->toBeString();
});
