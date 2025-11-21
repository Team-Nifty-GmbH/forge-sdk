<?php

use Illuminate\Support\Collection;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\PaginationPlugin\Paginator;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersIndexRequest;
use TeamNifty\Forge\Requests\User\MeRequest;

beforeEach(function (): void {
    // Bind Forge instance to container for CanBeSent trait
    app()->singleton(Forge::class, function () {
        $mockClient = new MockClient([
            MockResponse::make(['data' => ['user' => ['id' => 1, 'name' => 'Test User']]], 200),
            MockResponse::make(['data' => [['id' => 1], ['id' => 2]]], 200),
            MockResponse::make(['data' => ['servers' => [['id' => 1]]], 'meta' => ['cursor' => ['next' => null]]], 200),
        ]);

        $forge = new Forge(bearerToken: 'test-token');
        $forge->withMockClient($mockClient);

        return $forge;
    });
});

it('can call collect method on request', function (): void {
    $request = new MeRequest();
    $collection = $request->collect('data.user');

    expect($collection)->toBeInstanceOf(Collection::class)
        ->and($collection->toArray())->toHaveKey('id');
});

it('can call json method on request', function (): void {
    $request = new MeRequest();
    $json = $request->json();

    expect($json)->toBeArray()
        ->and($json)->toHaveKey('data');
});

it('can call paginate method on paginated request', function (): void {
    $request = new OrganizationsServersIndexRequest(organization: 'test-org');
    $paginator = $request->paginate();

    expect($paginator)->toBeInstanceOf(Paginator::class);
});

it('can call send method on request', function (): void {
    $request = new MeRequest();
    $response = $request->send();

    expect($response)->toBeObject()
        ->and($response->status())->toBe(200);
});
