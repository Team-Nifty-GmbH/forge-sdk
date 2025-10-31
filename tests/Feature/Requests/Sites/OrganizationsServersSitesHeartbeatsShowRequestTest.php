<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesHeartbeatsShowRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHeartbeatsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesHeartbeatsShowRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesHeartbeatsShowRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request->resolveEndpoint())->toBeString();
});
