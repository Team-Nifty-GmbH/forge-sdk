<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsScriptUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsScriptUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: null);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: null);

    expect($request->body()->all())->toBeArray();
});
