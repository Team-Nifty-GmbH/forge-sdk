<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpCliVersionShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpCliVersionShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpCliVersionShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpCliVersionShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpCliVersionShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
