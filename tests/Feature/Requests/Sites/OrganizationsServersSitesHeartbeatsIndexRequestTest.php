<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesHeartbeatsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesHeartbeatsIndexRequest(organization: 'test-value', server: 1, site: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesHeartbeatsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesHeartbeatsIndexRequest(organization: 'test-value', server: 1, site: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesHeartbeatsIndexRequest(organization: 'test-value', server: 1, site: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
