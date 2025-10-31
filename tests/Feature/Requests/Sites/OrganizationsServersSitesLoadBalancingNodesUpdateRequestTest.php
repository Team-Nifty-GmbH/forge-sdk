<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLoadBalancingNodesUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLoadBalancingNodesUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
