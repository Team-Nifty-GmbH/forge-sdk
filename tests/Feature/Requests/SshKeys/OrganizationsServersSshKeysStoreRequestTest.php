<?php

use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: NULL);

    expect($request)->toBeInstanceOf(OrganizationsServersSshKeysStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: NULL);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: NULL);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: NULL);

    expect($request->body()->all())->toBeArray();
});
