<?php

use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSshKeysShowRequest(organization: 'test-value', server: 1, key: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSshKeysShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSshKeysShowRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSshKeysShowRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->resolveEndpoint())->toBeString();
});
