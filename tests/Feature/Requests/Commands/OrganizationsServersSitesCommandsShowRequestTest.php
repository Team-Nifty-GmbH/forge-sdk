<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesCommandsShowRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesCommandsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesCommandsShowRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesCommandsShowRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->resolveEndpoint())->toBeString();
});
