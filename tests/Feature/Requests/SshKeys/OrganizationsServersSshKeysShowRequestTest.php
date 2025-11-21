<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSshKeysShowRequest(organization: 'test-value', server: 1, key: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSshKeysShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSshKeysShowRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSshKeysShowRequest(organization: 'test-value', server: 1, key: 1);

    expect($request->resolveEndpoint())->toBeString();
});
