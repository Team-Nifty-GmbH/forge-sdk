<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Resource\Databases;

it('can call organizationsServersDatabasePasswordUpdateRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabasePasswordUpdateRequest('test-value', 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseSchemasDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseSchemasDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseSchemasIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseSchemasIndexRequest('test-value', 1, 'test-value', 1, 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseSchemasShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseSchemasShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseSchemasStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseSchemasStoreRequest('test-value', 1, 'test-value', null, null);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseSchemasSynchronizationsStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseSchemasSynchronizationsStoreRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseUsersDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseUsersDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseUsersIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseUsersIndexRequest('test-value', 1, 'test-value', 1, 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseUsersShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseUsersShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseUsersStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseUsersStoreRequest('test-value', 1, 'test-value', 'test-value', true, ['test' => 'value']);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersDatabaseUsersUpdateRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Databases($forge);
    $response = $resource->organizationsServersDatabaseUsersUpdateRequest('test-value', 1, 1, null, ['test' => 'value']);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
