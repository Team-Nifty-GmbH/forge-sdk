<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsHorizonStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsInertiaStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsLaravelSchedulerStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsOctaneStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsPulseStoreRequest;
use TeamNifty\Forge\Requests\Integrations\OrganizationsServersSitesIntegrationsReverbStoreRequest;
use TeamNifty\Forge\Requests\Organizations\OrganizationsServerCredentialsVpcsStoreRequest;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersStoreRequest;

it('returns the response body as dto', function (string $class): void {
    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient(new MockClient([MockResponse::make(['data' => ['id' => 1]], 200)]));

    $response = $forge->send(makeWithDummyArguments($class));

    expect($response->dto())->toBe(['data' => ['id' => 1]]);
})->with([
    OrganizationsServersSitesIntegrationsHorizonStoreRequest::class,
    OrganizationsServersSitesIntegrationsInertiaStoreRequest::class,
    OrganizationsServersSitesIntegrationsLaravelSchedulerStoreRequest::class,
    OrganizationsServersSitesIntegrationsOctaneStoreRequest::class,
    OrganizationsServersSitesIntegrationsPulseStoreRequest::class,
    OrganizationsServersSitesIntegrationsReverbStoreRequest::class,
    OrganizationsServerCredentialsVpcsStoreRequest::class,
    OrganizationsServersStoreRequest::class,
]);
