<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersFirewallRulesShowRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersFirewallRulesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersFirewallRulesShowRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersFirewallRulesShowRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
