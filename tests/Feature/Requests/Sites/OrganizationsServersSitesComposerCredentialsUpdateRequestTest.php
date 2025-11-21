<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesComposerCredentialsUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesComposerCredentialsUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesComposerCredentialsUpdateRequest(organization: 'test-value', server: 1, site: 1, repository: 'test-value', username: 'test-value', password: 'test-value');

    expect($request->body()->all())->toBeArray();
});
