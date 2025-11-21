<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsServerCredentialsDestroyRequest(organization: 'test-value', team: 1, credential: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServerCredentialsDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsServerCredentialsDestroyRequest(organization: 'test-value', team: 1, credential: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsServerCredentialsDestroyRequest(organization: 'test-value', team: 1, credential: 1);

    expect($request->resolveEndpoint())->toBeString();
});
