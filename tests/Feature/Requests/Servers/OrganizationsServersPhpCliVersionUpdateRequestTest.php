<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpCliVersionUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpCliVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpCliVersionUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpCliVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpCliVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersPhpCliVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->body()->all())->toBeArray();
});
