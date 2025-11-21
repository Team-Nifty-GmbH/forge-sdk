<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsFpmShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsFpmShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsFpmShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsFpmShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsFpmShowRequest(organization: 'test-value', server: 1, phpVersion: 1);

    expect($request->resolveEndpoint())->toBeString();
});
