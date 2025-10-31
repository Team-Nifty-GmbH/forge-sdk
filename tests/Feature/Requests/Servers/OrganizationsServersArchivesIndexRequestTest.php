<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersArchivesIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersArchivesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersArchivesIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersArchivesIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
