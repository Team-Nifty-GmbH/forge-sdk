<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Resource\SecurityRules;

it('can call organizationsServersSitesSecurityRulesDestroyRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SecurityRules($forge);
    $response = $resource->organizationsServersSitesSecurityRulesDestroyRequest('test-value', 1, 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesSecurityRulesIndexRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SecurityRules($forge);
    $response = $resource->organizationsServersSitesSecurityRulesIndexRequest('test-value', 1, 1, 'test-value', 1, 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesSecurityRulesShowRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SecurityRules($forge);
    $response = $resource->organizationsServersSitesSecurityRulesShowRequest('test-value', 1, 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesSecurityRulesStoreRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SecurityRules($forge);
    $response = $resource->organizationsServersSitesSecurityRulesStoreRequest('test-value', 1, 1, 'test-value', 'test-value', ['test' => 'value']);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersSitesSecurityRulesUpdateRequest method', function (): void {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new SecurityRules($forge);
    $response = $resource->organizationsServersSitesSecurityRulesUpdateRequest('test-value', 1, 1, 1, 'test-value', ['test' => 'value'], null);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
