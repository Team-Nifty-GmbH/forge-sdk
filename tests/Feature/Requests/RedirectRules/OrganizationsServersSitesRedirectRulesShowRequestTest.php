<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesShowRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesRedirectRulesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesShowRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesRedirectRulesShowRequest(organization: 'test-value', server: 1, site: 1, redirectRule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
