<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Deployments\OrganizationsServersSitesWebhooksShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesWebhooksShowRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesWebhooksShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesWebhooksShowRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesWebhooksShowRequest(organization: 'test-value', server: 1, site: 1, deploymentWebhook: 1);

    expect($request->resolveEndpoint())->toBeString();
});
