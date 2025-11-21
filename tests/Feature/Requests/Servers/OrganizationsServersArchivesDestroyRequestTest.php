<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersArchivesDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersArchivesDestroyRequest(organization: 'test-value', server: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersArchivesDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersArchivesDestroyRequest(organization: 'test-value', server: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersArchivesDestroyRequest(organization: 'test-value', server: 1);

    expect($request->resolveEndpoint())->toBeString();
});
