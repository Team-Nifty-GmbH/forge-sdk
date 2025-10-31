<?php

use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersBackgroundProcessesUpdateRequest(organization: 'test-value', server: 1, backgroundProcess: 1, name: 'test-value', supervisorConfig: 'test-value');

    expect($request->body()->all())->toBeArray();
});
