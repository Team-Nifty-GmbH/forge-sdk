<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersNginxTemplatesUpdateRequest(organization: 'test-value', server: 1, nginxTemplate: 1, name: 'test-value', content: 'test-value');

    expect($request->body()->all())->toBeArray();
});
