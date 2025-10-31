<?php

use TeamNifty\Forge\Requests\BackgroundProcesses\OrganizationsServersBackgroundProcessesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersBackgroundProcessesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteruser: 'test-value', filtersiteId: 'test-value', filterdirectory: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersBackgroundProcessesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersBackgroundProcessesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteruser: 'test-value', filtersiteId: 'test-value', filterdirectory: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersBackgroundProcessesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteruser: 'test-value', filtersiteId: 'test-value', filterdirectory: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
