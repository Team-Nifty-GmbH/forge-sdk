<?php

use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersMonitorsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterstate: 'test-value', filtertype: 'test-value', filternotify: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersMonitorsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersMonitorsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterstate: 'test-value', filtertype: 'test-value', filternotify: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersMonitorsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filterstate: 'test-value', filtertype: 'test-value', filternotify: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
