<?php

use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsCertificateStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsCertificateStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsServersSitesDomainsCertificateStoreRequest(organization: 'test-value', server: 1, site: 1, domainRecord: 1, letsencrypt: ['test' => 'value'], existing: ['test' => 'value'], csr: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
