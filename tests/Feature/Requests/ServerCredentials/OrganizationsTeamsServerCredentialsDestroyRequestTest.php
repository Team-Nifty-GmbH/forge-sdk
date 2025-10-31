<?php

use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsServerCredentialsDestroyRequest(organization: 'test-value', team: 1, credential: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServerCredentialsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsServerCredentialsDestroyRequest(organization: 'test-value', team: 1, credential: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsServerCredentialsDestroyRequest(organization: 'test-value', team: 1, credential: 1);

    expect($request->resolveEndpoint())->toBeString();
});
