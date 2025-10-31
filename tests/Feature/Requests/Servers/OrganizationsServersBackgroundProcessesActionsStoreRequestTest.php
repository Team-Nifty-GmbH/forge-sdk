<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersBackgroundProcessesActionsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersBackgroundProcessesActionsStoreRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesActionsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersBackgroundProcessesActionsStoreRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersBackgroundProcessesActionsStoreRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersBackgroundProcessesActionsStoreRequest(organization: 'test-value', server: 1, backgroundProcess: 1);

    expect($request->body()->all())->toBeArray();
});
