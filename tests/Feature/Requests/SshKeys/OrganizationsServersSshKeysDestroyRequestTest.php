<?php

use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSshKeysDestroyRequest(organization: 'test-value', server: 1, key: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSshKeysDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSshKeysDestroyRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSshKeysDestroyRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->resolveEndpoint())->toBeString();
});
