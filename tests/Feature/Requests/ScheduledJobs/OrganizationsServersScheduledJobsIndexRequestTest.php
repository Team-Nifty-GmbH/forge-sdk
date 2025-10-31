<?php

use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersScheduledJobsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filteruser: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersScheduledJobsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersScheduledJobsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filteruser: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersScheduledJobsIndexRequest(organization: 'test-value', server: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: 'test-value', filteruser: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
