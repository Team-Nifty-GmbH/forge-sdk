<?php

use TeamNifty\Forge\Requests\ServerCredentials\OrganizationsTeamsServerCredentialsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsTeamsServerCredentialsIndexRequest(organization: 'test-value', team: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsTeamsServerCredentialsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsTeamsServerCredentialsIndexRequest(organization: 'test-value', team: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsTeamsServerCredentialsIndexRequest(organization: 'test-value', team: 1, pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
