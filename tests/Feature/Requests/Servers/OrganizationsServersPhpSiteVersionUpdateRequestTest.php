<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpSiteVersionUpdateRequest;
use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpSiteVersionUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpSiteVersionUpdateRequest(organization: 'test-value', server: 1, phpVersion: TeamNifty\Forge\Enums\UpdatePhpCliVersionRequestPhpVersion::cases()[0]);

    expect($request->body()->all())->toBeArray();
});
