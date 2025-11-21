<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServerCredentialsShowRequest(organization: 'test-value', credential: 1);

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServerCredentialsShowRequest(organization: 'test-value', credential: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServerCredentialsShowRequest(organization: 'test-value', credential: 1);

    expect($request->resolveEndpoint())->toBeString();
});
