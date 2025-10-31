<?php

use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServerCredentialsShowRequest(organization: 'test-value', credential: 1);

    expect($request)->toBeInstanceOf(OrganizationsServerCredentialsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServerCredentialsShowRequest(organization: 'test-value', credential: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServerCredentialsShowRequest(organization: 'test-value', credential: 1);

    expect($request->resolveEndpoint())->toBeString();
});
