<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesLogShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersBackgroundProcessesLogShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesLogShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersBackgroundProcessesLogShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersBackgroundProcessesLogShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->resolveEndpoint())->toBeString();
});
