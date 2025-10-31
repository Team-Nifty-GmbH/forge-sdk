<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesEnvironmentUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesEnvironmentUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: NULL);

    expect($request->body()->all())->toBeArray();
});
