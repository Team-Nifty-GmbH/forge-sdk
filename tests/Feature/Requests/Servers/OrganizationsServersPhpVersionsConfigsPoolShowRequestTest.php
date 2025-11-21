<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsPoolShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsPoolShowRequest(organization: 'test-value', server: 1, phpVersion: 1, user: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsPoolShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsPoolShowRequest(organization: 'test-value', server: 1, phpVersion: 1, user: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsPoolShowRequest(organization: 'test-value', server: 1, phpVersion: 1, user: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
