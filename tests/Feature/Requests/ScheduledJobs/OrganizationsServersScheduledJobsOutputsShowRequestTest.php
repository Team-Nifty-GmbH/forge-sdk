<?php

use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsOutputsShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersScheduledJobsOutputsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersScheduledJobsOutputsShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersScheduledJobsOutputsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersScheduledJobsOutputsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->resolveEndpoint())->toBeString();
});
