<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsTeamsUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
