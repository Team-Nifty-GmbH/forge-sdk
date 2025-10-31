<?php

use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesSecurityRulesShowRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesSecurityRulesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesSecurityRulesShowRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesSecurityRulesShowRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
