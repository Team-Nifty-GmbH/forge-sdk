<?php

use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: NULL, ipAddress: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersFirewallRulesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: NULL, ipAddress: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: NULL, ipAddress: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: NULL, ipAddress: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
