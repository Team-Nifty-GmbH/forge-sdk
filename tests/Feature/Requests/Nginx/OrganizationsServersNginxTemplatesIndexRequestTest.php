<?php

use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersNginxTemplatesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersNginxTemplatesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersNginxTemplatesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
