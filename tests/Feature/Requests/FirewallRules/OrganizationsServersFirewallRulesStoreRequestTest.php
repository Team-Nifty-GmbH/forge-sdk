<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: null, ipAddress: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersFirewallRulesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: null, ipAddress: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: null, ipAddress: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersFirewallRulesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', port: null, ipAddress: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
