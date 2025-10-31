<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesNginxUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesNginxUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesNginxUpdateRequest(organization: 'test-value', server: 1, site: 1, nginxConfig: 'test-value');

    expect($request->body()->all())->toBeArray();
});
