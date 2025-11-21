<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesShowRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersNginxTemplatesShowRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersNginxTemplatesShowRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersNginxTemplatesShowRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request->resolveEndpoint())->toBeString();
});
