<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersBackgroundProcessesShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersBackgroundProcessesShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersBackgroundProcessesShowRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->resolveEndpoint())->toBeString();
});
