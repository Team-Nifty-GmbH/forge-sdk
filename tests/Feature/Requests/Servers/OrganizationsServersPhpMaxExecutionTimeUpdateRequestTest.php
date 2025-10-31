<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxExecutionTimeUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpMaxExecutionTimeUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: NULL, maxExecutionTime: NULL, opcache: NULL);

    expect($request->body()->all())->toBeArray();
});
