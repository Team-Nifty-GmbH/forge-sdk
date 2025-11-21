<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request->body()->all())->toBeArray();
});
