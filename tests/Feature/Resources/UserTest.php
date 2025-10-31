<?php

use TeamNifty\Forge\Resource\User;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;

it('can call meRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new User($forge);
    $response = $resource->meRequest();

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
