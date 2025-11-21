<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersKeyShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersKeyShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersKeyShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersKeyShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersKeyShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
