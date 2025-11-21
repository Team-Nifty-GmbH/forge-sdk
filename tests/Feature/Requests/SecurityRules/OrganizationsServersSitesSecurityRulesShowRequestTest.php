<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesShowRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesSecurityRulesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesShowRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesShowRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
