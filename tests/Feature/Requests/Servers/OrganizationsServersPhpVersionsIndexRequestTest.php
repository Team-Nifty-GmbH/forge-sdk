<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpVersionsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpVersionsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterversion: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersPhpVersionsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpVersionsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterversion: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpVersionsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterversion: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
