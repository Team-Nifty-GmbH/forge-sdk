<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersIndexRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsServersIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteripAddress: 'test-value', filtername: 'test-value', filterregion: 'test-value', filtersize: 'test-value', filterprovider: 'test-value', filterubuntuVersion: 'test-value', filterphpVersion: 'test-value', filterdatabaseType: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsServersIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsServersIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteripAddress: 'test-value', filtername: 'test-value', filterregion: 'test-value', filtersize: 'test-value', filterprovider: 'test-value', filterubuntuVersion: 'test-value', filterphpVersion: 'test-value', filterdatabaseType: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsServersIndexRequest(organization: 'test-value', sort: 'test-value', pagesize: 1, pagecursor: 'test-value', filteripAddress: 'test-value', filtername: 'test-value', filterregion: 'test-value', filtersize: 'test-value', filterprovider: 'test-value', filterubuntuVersion: 'test-value', filterphpVersion: 'test-value', filterdatabaseType: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
