<?php

use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersKeyUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersKeyUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersKeyUpdateRequest(organization: 'test-value', server: 1);

    expect($request->body()->all())->toBeArray();
});
