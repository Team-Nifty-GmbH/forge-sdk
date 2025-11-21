<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServerCredentialsVpcsShowRequest(organization: 'test-value', credential: 1, region: 'test-value', vpcId: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsVpcsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServerCredentialsVpcsShowRequest(organization: 'test-value', credential: 1, region: 'test-value', vpcId: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServerCredentialsVpcsShowRequest(organization: 'test-value', credential: 1, region: 'test-value', vpcId: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
