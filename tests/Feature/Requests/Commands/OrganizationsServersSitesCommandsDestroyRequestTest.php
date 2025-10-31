<?php

use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesCommandsDestroyRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesCommandsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesCommandsDestroyRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesCommandsDestroyRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->resolveEndpoint())->toBeString();
});
