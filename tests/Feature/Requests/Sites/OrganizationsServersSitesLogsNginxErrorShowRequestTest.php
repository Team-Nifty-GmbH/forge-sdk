<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxErrorShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesLogsNginxErrorShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsNginxErrorShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesLogsNginxErrorShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesLogsNginxErrorShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
