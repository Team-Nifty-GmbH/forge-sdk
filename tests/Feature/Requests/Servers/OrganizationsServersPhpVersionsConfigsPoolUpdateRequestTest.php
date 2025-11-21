<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsConfigsPoolUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: null);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsConfigsPoolUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: null);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersPhpVersionsConfigsPoolUpdateRequest(organization: 'test-value', server: 1, phpVersion: 1, phpConfig: 'test-value', user: null);

    expect($request->body()->all())->toBeArray();
});
