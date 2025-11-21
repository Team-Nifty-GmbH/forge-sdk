<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesSecurityRulesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
