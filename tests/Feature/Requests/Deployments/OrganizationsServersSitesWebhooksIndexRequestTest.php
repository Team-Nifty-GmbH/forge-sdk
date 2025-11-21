<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesWebhooksIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesWebhooksIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesWebhooksIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesWebhooksIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
