<?php

use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersFirewallRulesDestroyRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersFirewallRulesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersFirewallRulesDestroyRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersFirewallRulesDestroyRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
