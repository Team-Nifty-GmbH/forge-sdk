<?php

use TeamNifty\Forge\Requests\RedirectRules\OrganizationsServersSitesRedirectRulesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersSitesRedirectRulesIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterfrom: 'test-value', filterto: 'test-value', filtertype: 'test-value', filterstatus: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersSitesRedirectRulesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersSitesRedirectRulesIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterfrom: 'test-value', filterto: 'test-value', filtertype: 'test-value', filterstatus: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersSitesRedirectRulesIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterfrom: 'test-value', filterto: 'test-value', filtertype: 'test-value', filterstatus: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
