<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesHeartbeatsDestroyRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHeartbeatsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesHeartbeatsDestroyRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesHeartbeatsDestroyRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request->resolveEndpoint())->toBeString();
});
