<?php

use TeamNifty\Forge\Resource\Roles;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;

it('can call organizationsRolesDestroyRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->organizationsRolesDestroyRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRolesIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->organizationsRolesIndexRequest('test-value', 'test-value', 1, 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRolesPermissionsIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->organizationsRolesPermissionsIndexRequest('test-value', 1, 1, 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRolesShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->organizationsRolesShowRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRolesStoreRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->organizationsRolesStoreRequest('test-value', 'test-value', ['test' => 'value']);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRolesUpdateRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->organizationsRolesUpdateRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call permissionsIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->permissionsIndexRequest(1, 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call permissionsShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->permissionsShowRequest(1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call predefinedRolesIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->predefinedRolesIndexRequest('test-value', 1, 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call predefinedRolesShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Roles($forge);
    $response = $resource->predefinedRolesShowRequest(1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
