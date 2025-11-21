<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersMonitorsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterstate: 'test-value', filtertype: 'test-value', filternotify: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersMonitorsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersMonitorsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterstate: 'test-value', filtertype: 'test-value', filternotify: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersMonitorsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterstate: 'test-value', filtertype: 'test-value', filternotify: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
