<?php

use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServerCredentialsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServerCredentialsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServerCredentialsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
