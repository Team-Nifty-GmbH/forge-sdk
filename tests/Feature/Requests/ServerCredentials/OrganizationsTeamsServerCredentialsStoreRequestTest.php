<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServerCredentialsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request->body()->all())->toBeArray();
});
