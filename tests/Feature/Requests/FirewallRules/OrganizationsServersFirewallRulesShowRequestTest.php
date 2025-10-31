<?php

use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersFirewallRulesShowRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersFirewallRulesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersFirewallRulesShowRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersFirewallRulesShowRequest(organization: 'test-value', server: 1, rule: 1);

    expect($request->resolveEndpoint())->toBeString();
});
