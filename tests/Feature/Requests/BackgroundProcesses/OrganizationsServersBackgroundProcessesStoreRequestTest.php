<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;
use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: null, startsecs: 1, stopwaitsecs: 1, stopsignal: null);

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: null, startsecs: 1, stopwaitsecs: 1, stopsignal: null);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: null, startsecs: 1, stopwaitsecs: 1, stopsignal: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersBackgroundProcessesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', command: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], processes: 1, directory: null, startsecs: 1, stopwaitsecs: 1, stopsignal: null);

    expect($request->body()->all())->toBeArray();
});
