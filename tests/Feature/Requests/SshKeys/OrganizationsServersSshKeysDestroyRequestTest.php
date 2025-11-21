<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSshKeysDestroyRequest(organization: 'test-value', server: 1, key: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSshKeysDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSshKeysDestroyRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSshKeysDestroyRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->resolveEndpoint())->toBeString();
});
