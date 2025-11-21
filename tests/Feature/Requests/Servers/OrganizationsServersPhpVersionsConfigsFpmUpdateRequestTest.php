<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsFpmUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsFpmUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsFpmUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value');

    expect($request->body()->all())->toBeArray();
});
