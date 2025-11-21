<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersKeyUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersKeyUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request->body()->all())->toBeArray();
});
