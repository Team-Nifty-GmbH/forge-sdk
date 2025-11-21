<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesLoadBalancingNodesUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesLoadBalancingNodesUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesLoadBalancingNodesUpdateRequest(organization: 'test-value', server: 1, site: 1, balancing: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
