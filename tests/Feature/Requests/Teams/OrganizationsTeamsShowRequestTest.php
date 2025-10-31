<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsShowRequest(organization: 'test-value', team: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsShowRequest(organization: 'test-value', team: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsShowRequest(organization: 'test-value', team: 1);

    expect($request->resolveEndpoint())->toBeString();
});
