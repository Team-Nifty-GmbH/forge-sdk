<?php

use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersScheduledJobsDestroyRequest(organization: 'test-value', server: 1, job: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersScheduledJobsDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersScheduledJobsDestroyRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersScheduledJobsDestroyRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->resolveEndpoint())->toBeString();
});
