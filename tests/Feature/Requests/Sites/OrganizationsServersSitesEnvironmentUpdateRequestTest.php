<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesEnvironmentUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesEnvironmentUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: null);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesEnvironmentUpdateRequest(organization: 'test-value', server: 1, site: 1, environment: 'test-value', cache: true, queues: true, encryptionKey: null);

    expect($request->body()->all())->toBeArray();
});
