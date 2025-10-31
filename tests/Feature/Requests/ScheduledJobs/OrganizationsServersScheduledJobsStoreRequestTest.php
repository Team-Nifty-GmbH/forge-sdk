<?php

use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: NULL, cron: NULL, heartbeat: NULL, gracePeriod: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersScheduledJobsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: NULL, cron: NULL, heartbeat: NULL, gracePeriod: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: NULL, cron: NULL, heartbeat: NULL, gracePeriod: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: NULL, cron: NULL, heartbeat: NULL, gracePeriod: 'test-value');

    expect($request->body()->all())->toBeArray();
});
