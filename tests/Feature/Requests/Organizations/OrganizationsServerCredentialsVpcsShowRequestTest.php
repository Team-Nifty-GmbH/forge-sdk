<?php

use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServerCredentialsVpcsShowRequest(organization: 'test-value', credential: 1, region: 'test-value', vpcId: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsVpcsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServerCredentialsVpcsShowRequest(organization: 'test-value', credential: 1, region: 'test-value', vpcId: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServerCredentialsVpcsShowRequest(organization: 'test-value', credential: 1, region: 'test-value', vpcId: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
