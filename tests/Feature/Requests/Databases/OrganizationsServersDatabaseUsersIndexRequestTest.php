<?php

use TeamNifty\Forge\Requests\Databases\OrganizationsServersDatabaseUsersIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersDatabaseUsersIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterstatus: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersDatabaseUsersIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersDatabaseUsersIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterstatus: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersDatabaseUsersIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterstatus: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
