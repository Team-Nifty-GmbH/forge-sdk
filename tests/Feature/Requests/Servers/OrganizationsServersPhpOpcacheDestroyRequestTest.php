<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpOpcacheDestroyRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpOpcacheDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpOpcacheDestroyRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpOpcacheDestroyRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
