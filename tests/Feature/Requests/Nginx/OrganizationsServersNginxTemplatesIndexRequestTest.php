<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersNginxTemplatesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersNginxTemplatesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersNginxTemplatesIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filtername: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
