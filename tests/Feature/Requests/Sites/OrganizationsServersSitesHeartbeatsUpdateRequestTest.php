<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHeartbeatsUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesHeartbeatsUpdateRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->body()->all())->toBeArray();
});
