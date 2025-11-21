<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersFirewallRulesDestroyRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersFirewallRulesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersFirewallRulesDestroyRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersFirewallRulesDestroyRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
