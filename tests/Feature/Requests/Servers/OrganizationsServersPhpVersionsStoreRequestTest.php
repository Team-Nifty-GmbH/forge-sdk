<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersPhpVersionsStoreRequest(organization: 'test-value', server: 1, cliDefault: true, siteDefault: true);

    expect($request->body()->all())->toBeArray();
});
