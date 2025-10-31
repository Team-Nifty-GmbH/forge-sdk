<?php

use TeamNifty\Forge\Requests\FirewallRules\OrganizationsServersFirewallRulesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersFirewallRulesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterstatus: 'test-value', filteripAddress: 'test-value', filtertype: 'test-value', filterport: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersFirewallRulesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersFirewallRulesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterstatus: 'test-value', filteripAddress: 'test-value', filtertype: 'test-value', filterport: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersFirewallRulesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filterstatus: 'test-value', filteripAddress: 'test-value', filtertype: 'test-value', filterport: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
