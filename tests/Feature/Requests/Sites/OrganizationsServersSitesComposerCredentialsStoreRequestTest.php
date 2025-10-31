<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesComposerCredentialsStoreRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesComposerCredentialsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesComposerCredentialsStoreRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesComposerCredentialsStoreRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesComposerCredentialsStoreRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->body()->all())->toBeArray();
});
