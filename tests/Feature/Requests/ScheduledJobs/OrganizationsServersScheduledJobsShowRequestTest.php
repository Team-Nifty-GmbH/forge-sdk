<?php

use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersScheduledJobsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersScheduledJobsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersScheduledJobsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersScheduledJobsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->resolveEndpoint())->toBeString();
});
