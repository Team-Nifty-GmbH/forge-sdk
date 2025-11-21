<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsSitesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsSitesShowRequest(organization: 'test-value', site: 1);

    expect($request)->toBeInstanceOf(OrganizationsSitesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsSitesShowRequest(organization: 'test-value', site: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsSitesShowRequest(organization: 'test-value', site: 1);

    expect($request->resolveEndpoint())->toBeString();
});
