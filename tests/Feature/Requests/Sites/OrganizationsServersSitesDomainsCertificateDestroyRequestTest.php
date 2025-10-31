<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateDestroyRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDomainsCertificateDestroyRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsCertificateDestroyRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDomainsCertificateDestroyRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDomainsCertificateDestroyRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->resolveEndpoint())->toBeString();
});
