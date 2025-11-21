<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Commands\OrganizationsServersSitesCommandsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesCommandsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteruserId: 'test-value', filterstatus: 'test-value', filtercommand: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesCommandsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesCommandsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteruserId: 'test-value', filterstatus: 'test-value', filtercommand: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesCommandsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteruserId: 'test-value', filterstatus: 'test-value', filtercommand: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
