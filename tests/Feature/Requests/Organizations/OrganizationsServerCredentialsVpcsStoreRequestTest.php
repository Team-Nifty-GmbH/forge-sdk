<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServerCredentialsVpcsStoreRequest(organization: 'test-value', credential: 1, region: 'test-value', name: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsVpcsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServerCredentialsVpcsStoreRequest(organization: 'test-value', credential: 1, region: 'test-value', name: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServerCredentialsVpcsStoreRequest(organization: 'test-value', credential: 1, region: 'test-value', name: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServerCredentialsVpcsStoreRequest(organization: 'test-value', credential: 1, region: 'test-value', name: 'test-value');

    expect($request->body()->all())->toBeArray();
});
