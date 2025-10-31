<?php

use TeamNifty\Forge\Resource\ServerCredentials;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;

it('can call organizationsTeamsServerCredentialsDestroyRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new ServerCredentials($forge);
    $response = $resource->organizationsTeamsServerCredentialsDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsTeamsServerCredentialsIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new ServerCredentials($forge);
    $response = $resource->organizationsTeamsServerCredentialsIndexRequest('test-value', 1, 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsTeamsServerCredentialsStoreRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new ServerCredentials($forge);
    $response = $resource->organizationsTeamsServerCredentialsStoreRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
