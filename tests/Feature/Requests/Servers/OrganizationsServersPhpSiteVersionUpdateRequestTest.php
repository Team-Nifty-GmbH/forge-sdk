<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpSiteVersionUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpSiteVersionUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->body()->all())->toBeArray();
});
