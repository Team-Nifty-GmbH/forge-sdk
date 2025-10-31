<?php

use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesSecurityRulesUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: NULL);

    expect($request->body()->all())->toBeArray();
});
