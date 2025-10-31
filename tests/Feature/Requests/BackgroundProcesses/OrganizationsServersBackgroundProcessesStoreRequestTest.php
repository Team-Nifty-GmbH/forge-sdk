<?php

use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesStoreRequest;
use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;

it('can be instantiated', function () {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: NULL, startsecs: 1, stopwaitsecs: 1, stopsignal: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: NULL, startsecs: 1, stopwaitsecs: 1, stopsignal: NULL);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: NULL, startsecs: 1, stopwaitsecs: 1, stopsignal: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: NULL, startsecs: 1, stopwaitsecs: 1, stopsignal: NULL);

    expect($request->body()->all())->toBeArray();
});
