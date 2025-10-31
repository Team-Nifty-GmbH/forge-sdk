<?php

use TeamNifty\Forge\Requests\SecurityRules\OrganizationsServersSitesSecurityRulesStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesSecurityRulesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesSecurityRulesStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', path: 'test-value', credentials: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
