<?php

use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesCommandsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request->body()->all())->toBeArray();
});
