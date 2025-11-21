<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsDestroyRequest(organization: 'test-value', team: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsDestroyRequest(organization: 'test-value', team: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsDestroyRequest(organization: 'test-value', team: 1);

    expect($request->resolveEndpoint())->toBeString();
});
