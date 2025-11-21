<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesWebhooksDestroyRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesWebhooksDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesWebhooksDestroyRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesWebhooksDestroyRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->resolveEndpoint())->toBeString();
});
