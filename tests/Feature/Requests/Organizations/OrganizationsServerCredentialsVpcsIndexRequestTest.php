<?php

use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServerCredentialsVpcsIndexRequest(organization: 'test-value', credential: 1, region: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsVpcsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServerCredentialsVpcsIndexRequest(organization: 'test-value', credential: 1, region: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServerCredentialsVpcsIndexRequest(organization: 'test-value', credential: 1, region: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
