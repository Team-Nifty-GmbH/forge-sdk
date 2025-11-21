<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServerCredentialsVpcsIndexRequest(organization: 'test-value', credential: 1, region: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsVpcsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServerCredentialsVpcsIndexRequest(organization: 'test-value', credential: 1, region: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServerCredentialsVpcsIndexRequest(organization: 'test-value', credential: 1, region: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
