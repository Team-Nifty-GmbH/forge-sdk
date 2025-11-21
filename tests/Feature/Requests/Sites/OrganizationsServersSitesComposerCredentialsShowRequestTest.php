<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsShowRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesComposerCredentialsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsShowRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsShowRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
