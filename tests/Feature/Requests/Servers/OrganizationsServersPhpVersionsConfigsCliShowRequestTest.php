<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsCliShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsCliShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsCliShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsCliShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsCliShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->resolveEndpoint())->toBeString();
});
