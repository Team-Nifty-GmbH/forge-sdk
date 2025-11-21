<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersBackgroundProcessesDestroyRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersBackgroundProcessesDestroyRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersBackgroundProcessesDestroyRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->resolveEndpoint())->toBeString();
});
