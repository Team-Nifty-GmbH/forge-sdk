<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Resource\Recipes;

it('can call forgeRecipesIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->forgeRecipesIndexRequest(1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call forgeRecipesRunsStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->forgeRecipesRunsStoreRequest(1, true, ['test' => 'value']);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call forgeRecipesShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->forgeRecipesShowRequest(1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationRecipesStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationRecipesStoreRequest('test-value', 'test-value', CreateBackgroundProcessRequestUser::cases()[0], 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRecipesDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsRecipesDestroyRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRecipesIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsRecipesIndexRequest('test-value', 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRecipesRunsIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsRecipesRunsIndexRequest('test-value', 1, 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRecipesRunsShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsRecipesRunsShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRecipesRunsStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsRecipesRunsStoreRequest('test-value', 1, true, ['test' => 'value']);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRecipesShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsRecipesShowRequest('test-value', 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsRecipesUpdateRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsRecipesUpdateRequest('test-value', 1, 'test-value', CreateBackgroundProcessRequestUser::cases()[0], 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsTeamsRecipesDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsTeamsRecipesDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsTeamsRecipesIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsTeamsRecipesIndexRequest('test-value', 1, 1, 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsTeamsRecipesStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Recipes($forge);
    $response = $resource->organizationsTeamsRecipesStoreRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
