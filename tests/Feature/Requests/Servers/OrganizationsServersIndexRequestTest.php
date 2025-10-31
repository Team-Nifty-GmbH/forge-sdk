<?php

use TeamNifty\Forge\Requests\Servers\OrganizationsServersIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new OrganizationsServersIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteripAddress: 'test-value', filtername: 'test-value', filterregion: 'test-value', filtersize: 'test-value', filterprovider: 'test-value', filterubuntuVersion: 'test-value', filterphpVersion: 'test-value', filterdatabaseType: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsServersIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteripAddress: 'test-value', filtername: 'test-value', filterregion: 'test-value', filtersize: 'test-value', filterprovider: 'test-value', filterubuntuVersion: 'test-value', filterphpVersion: 'test-value', filterdatabaseType: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsServersIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteripAddress: 'test-value', filtername: 'test-value', filterregion: 'test-value', filtersize: 'test-value', filterprovider: 'test-value', filterubuntuVersion: 'test-value', filterphpVersion: 'test-value', filterdatabaseType: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
