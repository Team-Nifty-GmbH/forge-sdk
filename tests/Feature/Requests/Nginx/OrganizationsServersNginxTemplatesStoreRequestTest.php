<?php

use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersNginxTemplatesStoreRequest(organization: 'test-value', server: 1, name: 'test-value', content: 'test-value');

    expect($request->body()->all())->toBeArray();
});
