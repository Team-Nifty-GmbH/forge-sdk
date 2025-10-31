<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesComposerCredentialsDestroyRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesComposerCredentialsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesComposerCredentialsDestroyRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesComposerCredentialsDestroyRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
