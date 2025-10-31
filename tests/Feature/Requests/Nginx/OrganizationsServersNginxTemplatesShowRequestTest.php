<?php

use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersNginxTemplatesShowRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersNginxTemplatesShowRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersNginxTemplatesShowRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request->resolveEndpoint())->toBeString();
});
