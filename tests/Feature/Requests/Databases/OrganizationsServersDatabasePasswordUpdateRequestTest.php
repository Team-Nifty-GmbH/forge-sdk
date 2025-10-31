<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabasePasswordUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabasePasswordUpdateRequest(organization: 'test-value', server: 1, password: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersDatabasePasswordUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabasePasswordUpdateRequest(organization: 'test-value', server: 1, password: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabasePasswordUpdateRequest(organization: 'test-value', server: 1, password: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersDatabasePasswordUpdateRequest(organization: 'test-value', server: 1, password: 'test-value');

    expect($request->body()->all())->toBeArray();
});
