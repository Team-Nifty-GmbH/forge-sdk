<?php

use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesUpdateRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request->body()->all())->toBeArray();
});
