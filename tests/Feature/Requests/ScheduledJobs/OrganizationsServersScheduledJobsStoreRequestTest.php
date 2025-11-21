<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\ScheduledJobs\OrganizationsServersScheduledJobsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: null, cron: null, heartbeat: null, gracePeriod: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersScheduledJobsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: null, cron: null, heartbeat: null, gracePeriod: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: null, cron: null, heartbeat: null, gracePeriod: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersScheduledJobsStoreRequest(organization: 'test-value', server: 1, command: 'test-value', user: 'test-value', name: null, cron: null, heartbeat: null, gracePeriod: 'test-value');

    expect($request->body()->all())->toBeArray();
});
