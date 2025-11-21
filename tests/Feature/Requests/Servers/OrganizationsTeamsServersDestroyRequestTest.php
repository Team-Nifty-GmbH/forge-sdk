<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsTeamsServersDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsServersDestroyRequest(organization: 'test-value', team: 1, server: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServersDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsServersDestroyRequest(organization: 'test-value', team: 1, server: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsServersDestroyRequest(organization: 'test-value', team: 1, server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
