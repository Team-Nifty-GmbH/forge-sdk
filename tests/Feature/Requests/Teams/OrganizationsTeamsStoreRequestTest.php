<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsTeamsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsTeamsStoreRequest(organization: 'test-value', name: 'test-value', users: ['test' => 'value'], invites: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
