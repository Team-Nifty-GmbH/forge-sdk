<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Monitors\OrganizationsServersMonitorsStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersMonitorsStoreRequest(organization: 'test-value', server: 1, threshold: 1, minutes: 1, notify: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersMonitorsStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersMonitorsStoreRequest(organization: 'test-value', server: 1, threshold: 1, minutes: 1, notify: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersMonitorsStoreRequest(organization: 'test-value', server: 1, threshold: 1, minutes: 1, notify: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersMonitorsStoreRequest(organization: 'test-value', server: 1, threshold: 1, minutes: 1, notify: 'test-value');

    expect($request->body()->all())->toBeArray();
});
