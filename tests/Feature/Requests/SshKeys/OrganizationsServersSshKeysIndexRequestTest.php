<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\SshKeys\OrganizationsServersSshKeysIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSshKeysIndexRequest(organization: 'test-value', server: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filteruser: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSshKeysIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSshKeysIndexRequest(organization: 'test-value', server: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filteruser: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSshKeysIndexRequest(organization: 'test-value', server: 1, pagesize: 1, pagecursor: 'test-value', filtername: 'test-value', filteruser: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
