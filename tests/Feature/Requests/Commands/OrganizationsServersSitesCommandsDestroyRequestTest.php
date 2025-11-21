<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesCommandsDestroyRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesCommandsDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesCommandsDestroyRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesCommandsDestroyRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->resolveEndpoint())->toBeString();
});
