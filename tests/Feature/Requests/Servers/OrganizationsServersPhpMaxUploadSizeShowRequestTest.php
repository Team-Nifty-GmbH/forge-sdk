<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxUploadSizeShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersPhpMaxUploadSizeShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpMaxUploadSizeShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersPhpMaxUploadSizeShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersPhpMaxUploadSizeShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
