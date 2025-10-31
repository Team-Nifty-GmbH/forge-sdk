<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesComposerCredentialsUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->body()->all())->toBeArray();
});
