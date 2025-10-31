<?php

use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesWebhooksDestroyRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesWebhooksDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesWebhooksDestroyRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesWebhooksDestroyRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->resolveEndpoint())->toBeString();
});
