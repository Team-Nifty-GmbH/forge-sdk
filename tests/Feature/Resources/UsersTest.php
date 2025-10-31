<?php

use TeamNifty\Forge\Resource\Users;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;

it('can call userShowRequest method', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $resource = new Users($forge);
    $response = $resource->userShowRequest();

    expect($response)->toBeObject();
    $mockClient->assertSentCount(1);
});
