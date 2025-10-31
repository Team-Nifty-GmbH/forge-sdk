<?php

use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesLogShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersBackgroundProcessesLogShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesLogShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersBackgroundProcessesLogShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersBackgroundProcessesLogShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->resolveEndpoint())->toBeString();
});
