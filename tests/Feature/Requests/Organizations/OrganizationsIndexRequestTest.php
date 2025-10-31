<?php

use TeamNifty\Forge\Requests\Organizations\OrganizationsIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
