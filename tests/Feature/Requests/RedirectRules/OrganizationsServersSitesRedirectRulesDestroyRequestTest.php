<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesRedirectRulesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
