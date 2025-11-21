<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateDestroyRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDomainsCertificateDestroyRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsCertificateDestroyRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDomainsCertificateDestroyRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->getMethod())->toBe(Method::DELETE);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDomainsCertificateDestroyRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1);

    expect($request->resolveEndpoint())->toBeString();
});
