<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: null);

    expect($request)->toBeInstanceOf(OrganizationsServersSshKeysStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: null);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: null);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSshKeysStoreRequest(organization: 'test-value', server: 1, name: 'test-value', key: 'test-value', user: null);

    expect($request->body()->all())->toBeArray();
});
