<?php

use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesCommandsShowRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesCommandsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesCommandsShowRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesCommandsShowRequest(organization: 'test-value', server: 1, site: 1, command: 1);

    expect($request->resolveEndpoint())->toBeString();
});
