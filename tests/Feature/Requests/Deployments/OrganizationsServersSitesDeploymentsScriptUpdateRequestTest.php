<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsScriptUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsScriptUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: NULL);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesDeploymentsScriptUpdateRequest(organization: 'test-value', server: 1, site: 1, content: 'test-value', autoSource: NULL);

    expect($request->body()->all())->toBeArray();
});
