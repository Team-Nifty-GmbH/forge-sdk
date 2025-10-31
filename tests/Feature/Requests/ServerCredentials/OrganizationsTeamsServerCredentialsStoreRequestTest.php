<?php

use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request)->toBeInstanceOf(OrganizationsTeamsServerCredentialsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsTeamsServerCredentialsStoreRequest(organization: 'test-value', team: 1, credentialId: 1);

    expect($request->body()->all())->toBeArray();
});
