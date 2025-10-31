<?php

use TeamNifty\Forge\Requests\Nginx\OrganizationsServersNginxTemplatesDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersNginxTemplatesDestroyRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersNginxTemplatesDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersNginxTemplatesDestroyRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersNginxTemplatesDestroyRequest(organization: 'test-value', server: 1, nginxTemplate: 1);

    expect($request->resolveEndpoint())->toBeString();
});
