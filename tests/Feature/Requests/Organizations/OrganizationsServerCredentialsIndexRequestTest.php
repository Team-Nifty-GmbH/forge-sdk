<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServerCredentialsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServerCredentialsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServerCredentialsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
