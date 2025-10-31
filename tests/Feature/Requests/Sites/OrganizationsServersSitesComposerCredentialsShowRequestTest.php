<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesComposerCredentialsShowRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesComposerCredentialsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesComposerCredentialsShowRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesComposerCredentialsShowRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
