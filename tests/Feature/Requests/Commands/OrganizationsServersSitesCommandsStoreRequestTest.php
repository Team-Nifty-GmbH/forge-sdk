<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesCommandsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesCommandsStoreRequest(organization: 'test-value', server: 1, site: 1, command: 'test-value');

    expect($request->body()->all())->toBeArray();
});
