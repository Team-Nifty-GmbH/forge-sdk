<?php

use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesSecurityRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesSecurityRulesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesSecurityRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesSecurityRulesDestroyRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
