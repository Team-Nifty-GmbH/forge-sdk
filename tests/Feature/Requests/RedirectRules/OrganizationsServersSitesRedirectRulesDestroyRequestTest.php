<?php

use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesRedirectRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesRedirectRulesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesRedirectRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesRedirectRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
