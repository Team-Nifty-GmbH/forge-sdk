<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDomainsCertificateShowRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsCertificateShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDomainsCertificateShowRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDomainsCertificateShowRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->resolveEndpoint())->toBeString();
});
