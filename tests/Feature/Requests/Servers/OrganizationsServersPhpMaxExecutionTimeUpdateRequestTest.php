<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxExecutionTimeUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: null, maxExecutionTime: null, opcache: null);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpMaxExecutionTimeUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: null, maxExecutionTime: null, opcache: null);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: null, maxExecutionTime: null, opcache: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersPhpMaxExecutionTimeUpdateRequest(organization: 'test-value', server: 1, maxUploadSize: null, maxExecutionTime: null, opcache: null);

    expect($request->body()->all())->toBeArray();
});
