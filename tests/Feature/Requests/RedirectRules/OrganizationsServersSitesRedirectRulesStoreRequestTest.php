<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesStoreRequest(organization: 'test-value', server: 1, site: 1, from: 'test-value', to: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesRedirectRulesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesStoreRequest(organization: 'test-value', server: 1, site: 1, from: 'test-value', to: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesStoreRequest(organization: 'test-value', server: 1, site: 1, from: 'test-value', to: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesStoreRequest(organization: 'test-value', server: 1, site: 1, from: 'test-value', to: 'test-value');

    expect($request->body()->all())->toBeArray();
});
