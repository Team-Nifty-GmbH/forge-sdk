<?php

use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersBackgroundProcessesDestroyRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersBackgroundProcessesDestroyRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersBackgroundProcessesDestroyRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->resolveEndpoint())->toBeString();
});
