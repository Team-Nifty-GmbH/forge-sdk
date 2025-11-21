<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesWebhooksStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request->body()->all())->toBeArray();
});
