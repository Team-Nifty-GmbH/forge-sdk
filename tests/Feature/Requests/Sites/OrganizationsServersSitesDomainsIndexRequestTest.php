<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFilterstatus;
use TeamNifty\Forge\Enums\OrganizationsserverssitesdomainsindexFiltertype;
use TeamNifty\Forge\Requests\Sites\OrganizationsServersSitesDomainsIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersSitesDomainsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: OrganizationsserverssitesdomainsindexFilterstatus::cases()[0], filtertype: OrganizationsserverssitesdomainsindexFiltertype::cases()[0]);

    expect($request)->toBeInstanceOf(OrganizationsServersSitesDomainsIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersSitesDomainsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: OrganizationsserverssitesdomainsindexFilterstatus::cases()[0], filtertype: OrganizationsserverssitesdomainsindexFiltertype::cases()[0]);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersSitesDomainsIndexRequest(organization: 'test-value', server: 1, site: 1, sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filterstatus: OrganizationsserverssitesdomainsindexFilterstatus::cases()[0], filtertype: OrganizationsserverssitesdomainsindexFiltertype::cases()[0]);

    expect($request->resolveEndpoint())->toBeString();
});
