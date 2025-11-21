<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Organizations\OrganizationsShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsShowRequest(organization: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsShowRequest(organization: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsShowRequest(organization: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
