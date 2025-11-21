<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesSecurityRulesUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: null);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesUpdateRequest(organization: 'test-value', server: 1, site: 1, securityRule: 1, name: 'test-value', credentials: ['test' => 'value'], path: null);

    expect($request->body()->all())->toBeArray();
});
