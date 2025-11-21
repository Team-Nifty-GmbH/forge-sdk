<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesNginxUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesNginxUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request->body()->all())->toBeArray();
});
