<?php

use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsTeamsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
