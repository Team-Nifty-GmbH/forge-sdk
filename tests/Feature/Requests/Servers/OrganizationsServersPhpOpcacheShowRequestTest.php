<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpOpcacheShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpOpcacheShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpOpcacheShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpOpcacheShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpOpcacheShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
