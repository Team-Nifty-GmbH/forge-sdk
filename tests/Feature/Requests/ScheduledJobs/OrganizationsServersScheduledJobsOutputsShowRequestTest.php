<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsOutputsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersScheduledJobsOutputsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersScheduledJobsOutputsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersScheduledJobsOutputsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersScheduledJobsOutputsShowRequest(organization: 'test-value', server: 1, job: 1);

    expect($request->resolveEndpoint())->toBeString();
});
