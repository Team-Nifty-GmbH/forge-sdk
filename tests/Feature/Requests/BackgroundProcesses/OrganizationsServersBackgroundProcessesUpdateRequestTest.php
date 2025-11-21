<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request->body()->all())->toBeArray();
});
