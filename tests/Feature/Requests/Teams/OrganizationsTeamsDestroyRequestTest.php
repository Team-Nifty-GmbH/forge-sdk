<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsDestroyRequest(organization: 'test-value', team: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsDestroyRequest(organization: 'test-value', team: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsDestroyRequest(organization: 'test-value', team: 1);

    expect($request->resolveEndpoint())->toBeString();
});
