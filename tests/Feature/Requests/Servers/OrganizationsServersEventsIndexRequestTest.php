<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersEventsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersEventsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filterinitiatedBy: 'test-value', filterranAs: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersEventsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersEventsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filterinitiatedBy: 'test-value', filterranAs: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersEventsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filterinitiatedBy: 'test-value', filterranAs: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
