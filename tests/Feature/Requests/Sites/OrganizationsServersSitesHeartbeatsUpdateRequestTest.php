<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHeartbeatsUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->body()->all())->toBeArray();
});
