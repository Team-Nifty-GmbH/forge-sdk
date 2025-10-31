<?php

use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesRedirectRulesShowRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesRedirectRulesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesRedirectRulesShowRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesRedirectRulesShowRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
