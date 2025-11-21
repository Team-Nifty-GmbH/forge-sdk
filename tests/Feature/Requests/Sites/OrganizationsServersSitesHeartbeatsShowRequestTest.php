<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesHeartbeatsShowRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHeartbeatsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesHeartbeatsShowRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesHeartbeatsShowRequest(organization: 'test-value', server: 1, site: 1, heartbeat: 1);

    expect($request->resolveEndpoint())->toBeString();
});
