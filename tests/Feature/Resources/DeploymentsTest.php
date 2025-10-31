<?php

use TeamNifty\Forge\Resource\Deployments;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;

it('can call organizationsServersSitesDeploymentsDeployHookShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsDeployHookShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsDeployHookUpdateRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsDeployHookUpdateRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsIndexRequest('test-value', 1, 1, 'test-value', 1, 'test-value', 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsLogShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsLogShowRequest('test-value', 1, 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsPushToDeployDestroyRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsPushToDeployDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsPushToDeployStoreRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsPushToDeployStoreRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsScriptShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsScriptShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsScriptUpdateRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsScriptUpdateRequest('test-value', 1, 1, 'test-value', NULL);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsShowRequest('test-value', 1, 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsStatusDestroyRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsStatusDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsStatusShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsStatusShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesDeploymentsStoreRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesDeploymentsStoreRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesWebhooksDestroyRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesWebhooksDestroyRequest('test-value', 1, 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesWebhooksIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesWebhooksIndexRequest('test-value', 1, 1, 'test-value', 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesWebhooksShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesWebhooksShowRequest('test-value', 1, 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesWebhooksStoreRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Deployments($forge);
    $response = $resource->organizationsServersSitesWebhooksStoreRequest('test-value', 1, 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
