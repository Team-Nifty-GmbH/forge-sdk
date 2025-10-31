<?php

use TeamNifty\Forge\Resource\FirewallRules;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;

it('can call organizationsServersFirewallRulesDestroyRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new FirewallRules($forge);
    $response = $resource->organizationsServersFirewallRulesDestroyRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersFirewallRulesIndexRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new FirewallRules($forge);
    $response = $resource->organizationsServersFirewallRulesIndexRequest('test-value', 1, 'test-value', 1, 'test-value', 'test-value', 'test-value', 'test-value', 'test-value', 'test-value');

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersFirewallRulesShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new FirewallRules($forge);
    $response = $resource->organizationsServersFirewallRulesShowRequest('test-value', 1, 1);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});

it('can call organizationsServersFirewallRulesStoreRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new FirewallRules($forge);
    $response = $resource->organizationsServersFirewallRulesStoreRequest('test-value', 1, 'test-value', NULL, ['test' => 'value']);

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
