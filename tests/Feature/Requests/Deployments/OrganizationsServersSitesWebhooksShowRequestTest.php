<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesWebhooksShowRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesWebhooksShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesWebhooksShowRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesWebhooksShowRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->resolveEndpoint())->toBeString();
});
