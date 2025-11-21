<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Organizations\OrganizationsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
