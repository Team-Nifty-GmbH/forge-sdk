<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Teams\OrganizationsTeamsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsTeamsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsTeamsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsTeamsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsTeamsIndexRequest(organization: 'test-value', pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
