<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', include: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
