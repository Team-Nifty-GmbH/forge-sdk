<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsTeamsUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsTeamsUpdateRequest(organization: 'test-value', team: 1, name: 'test-value', users: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
