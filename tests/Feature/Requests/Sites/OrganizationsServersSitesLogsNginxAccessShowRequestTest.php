<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLogsNginxAccessShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesLogsNginxAccessShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLogsNginxAccessShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesLogsNginxAccessShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesLogsNginxAccessShowRequest(organization: 'test-value', server: 1, site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
