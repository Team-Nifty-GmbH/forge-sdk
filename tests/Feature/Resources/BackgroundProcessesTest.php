<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Resource\BackgroundProcesses;

it('can call organizationsServersBackgroundProcessesDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new BackgroundProcesses($forge);
    $response = $resource->organizationsServersBackgroundProcessesDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersBackgroundProcessesIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new BackgroundProcesses($forge);
    $response = $resource->organizationsServersBackgroundProcessesIndexRequest('test-value', 1, 'test-value', 1, 'test-value', 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersBackgroundProcessesLogShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new BackgroundProcesses($forge);
    $response = $resource->organizationsServersBackgroundProcessesLogShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersBackgroundProcessesShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new BackgroundProcesses($forge);
    $response = $resource->organizationsServersBackgroundProcessesShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersBackgroundProcessesStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new BackgroundProcesses($forge);
    $response = $resource->organizationsServersBackgroundProcessesStoreRequest('test-value', 1, 'test-value', 'test-value', CreateBackgroundProcessRequestUser::cases()[0], 1, null, 1, 1, null);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersBackgroundProcessesUpdateRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new BackgroundProcesses($forge);
    $response = $resource->organizationsServersBackgroundProcessesUpdateRequest('test-value', 1, 1, 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
