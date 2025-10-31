<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesWebhooksStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesWebhooksStoreRequest(organization: 'test-value', server: 1, site: 1, url: 'test-value');

    expect($request->body()->all())->toBeArray();
});
