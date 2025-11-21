<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsCertificateStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
