<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesDeploymentsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDeploymentsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtercommitHash: 'test-value', filtercommitMessage: 'test-value', filtercommitAuthor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDeploymentsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDeploymentsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtercommitHash: 'test-value', filtercommitMessage: 'test-value', filtercommitAuthor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDeploymentsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtercommitHash: 'test-value', filtercommitMessage: 'test-value', filtercommitAuthor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
