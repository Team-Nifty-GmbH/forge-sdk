<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpVersionsDestroyRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpVersionsDestroyRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpVersionsDestroyRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->resolveEndpoint())->toBeString();
});
