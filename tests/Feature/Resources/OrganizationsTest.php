<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Resource\Organizations;

it('can call organizationsIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Organizations($forge);
    $response = $resource->organizationsIndexRequest(1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServerCredentialsIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Organizations($forge);
    $response = $resource->organizationsServerCredentialsIndexRequest('test-value', 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServerCredentialsShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Organizations($forge);
    $response = $resource->organizationsServerCredentialsShowRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServerCredentialsVpcsIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Organizations($forge);
    $response = $resource->organizationsServerCredentialsVpcsIndexRequest('test-value', 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServerCredentialsVpcsShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Organizations($forge);
    $response = $resource->organizationsServerCredentialsVpcsShowRequest('test-value', 1, 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServerCredentialsVpcsStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Organizations($forge);
    $response = $resource->organizationsServerCredentialsVpcsStoreRequest('test-value', 1, 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Organizations($forge);
    $response = $resource->organizationsShowRequest('test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
