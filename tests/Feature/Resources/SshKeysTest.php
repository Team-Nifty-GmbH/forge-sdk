<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Resource\SshKeys;

it('can call organizationsServersKeyShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SshKeys($forge);
    $response = $resource->organizationsServersKeyShowRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersKeyUpdateRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SshKeys($forge);
    $response = $resource->organizationsServersKeyUpdateRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSshKeysDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SshKeys($forge);
    $response = $resource->organizationsServersSshKeysDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSshKeysIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SshKeys($forge);
    $response = $resource->organizationsServersSshKeysIndexRequest('test-value', 1, 1, 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSshKeysShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SshKeys($forge);
    $response = $resource->organizationsServersSshKeysShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSshKeysStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SshKeys($forge);
    $response = $resource->organizationsServersSshKeysStoreRequest('test-value', 1, 'test-value', 'test-value', null);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
