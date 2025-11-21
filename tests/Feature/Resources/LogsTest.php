<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Resource\Logs;

it('can call organizationsServersLogsDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Logs($forge);
    $response = $resource->organizationsServersLogsDestroyRequest('test-value', 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersLogsShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Logs($forge);
    $response = $resource->organizationsServersLogsShowRequest('test-value', 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
