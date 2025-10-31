<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxUploadSizeUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpMaxUploadSizeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpMaxUploadSizeUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpMaxUploadSizeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpMaxUploadSizeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpMaxUploadSizeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request->body()->all())->toBeArray();
});
