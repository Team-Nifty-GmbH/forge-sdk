<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesHeartbeatsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHeartbeatsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesHeartbeatsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesHeartbeatsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesHeartbeatsStoreRequest(organization: 'test-value', server: 1, site: 1, name: 'test-value', customFrequency: 'test-value');

    expect($request->body()->all())->toBeArray();
});
