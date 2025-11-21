<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsDestroyRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesComposerCredentialsDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsDestroyRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsDestroyRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
