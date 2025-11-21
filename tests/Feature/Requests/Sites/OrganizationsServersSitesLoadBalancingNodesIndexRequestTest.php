<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLoadBalancingNodesIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesLoadBalancingNodesIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLoadBalancingNodesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesLoadBalancingNodesIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesLoadBalancingNodesIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
