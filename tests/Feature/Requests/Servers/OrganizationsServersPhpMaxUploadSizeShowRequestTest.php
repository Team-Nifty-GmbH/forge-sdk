<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersPhpMaxUploadSizeShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersPhpMaxUploadSizeShowRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersPhpMaxUploadSizeShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersPhpMaxUploadSizeShowRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersPhpMaxUploadSizeShowRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
