<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersArchivesIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersArchivesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersArchivesIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersArchivesIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
