<?php

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersIndexRequest;

it('paginates through multiple pages', function (): void {
    $mockClient = new MockClient([
        MockResponse::make([
            'data' => [
                ['id' => 1, 'name' => 'Server 1'],
                ['id' => 2, 'name' => 'Server 2'],
            ],
            'links' => [
                'first' => 'https://forge.laravel.com/api/organizations/test-org/servers?cursor=first',
                'last' => 'https://forge.laravel.com/api/organizations/test-org/servers?cursor=last',
                'prev' => null,
                'next' => 'https://forge.laravel.com/api/organizations/test-org/servers?cursor=next',
            ],
            'meta' => [
                'path' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'per_page' => 15,
                'cursor' => [
                    'next' => 'cursor-token-123',
                    'prev' => null,
                ],
            ],
        ], 200),
        MockResponse::make([
            'data' => [
                ['id' => 3, 'name' => 'Server 3'],
            ],
            'links' => [
                'first' => 'https://forge.laravel.com/api/organizations/test-org/servers?cursor=first',
                'last' => 'https://forge.laravel.com/api/organizations/test-org/servers?cursor=last',
                'prev' => 'https://forge.laravel.com/api/organizations/test-org/servers?cursor=prev',
                'next' => null,
            ],
            'meta' => [
                'path' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'per_page' => 15,
                'cursor' => [
                    'next' => null,
                    'prev' => 'cursor-token-123',
                ],
            ],
        ], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $request = new OrganizationsServersIndexRequest(organization: 'test-org');
    $paginator = $forge->paginate($request);

    $allItems = [];
    foreach ($paginator as $item) {
        $allItems[] = $item;
    }

    expect($allItems)->toHaveCount(3)
        ->and($allItems[0]['id'])->toBe(1)
        ->and($allItems[1]['id'])->toBe(2)
        ->and($allItems[2]['id'])->toBe(3);

    $mockClient->assertSentCount(2);
});

it('handles pagination with no next cursor', function (): void {
    $mockClient = new MockClient([
        MockResponse::make([
            'data' => [
                ['id' => 1, 'name' => 'Server 1'],
            ],
            'links' => [
                'first' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'last' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'prev' => null,
                'next' => null,
            ],
            'meta' => [
                'path' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'per_page' => 15,
                'cursor' => [
                    'next' => null,
                    'prev' => null,
                ],
            ],
        ], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $request = new OrganizationsServersIndexRequest(organization: 'test-org');
    $paginator = $forge->paginate($request);

    $allItems = [];
    foreach ($paginator as $item) {
        $allItems[] = $item;
    }

    expect($allItems)->toHaveCount(1);
    $mockClient->assertSentCount(1);
});

it('handles empty pagination results', function (): void {
    $mockClient = new MockClient([
        MockResponse::make([
            'data' => [],
            'links' => [
                'first' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'last' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'prev' => null,
                'next' => null,
            ],
            'meta' => [
                'path' => 'https://forge.laravel.com/api/organizations/test-org/servers',
                'per_page' => 15,
                'cursor' => [
                    'next' => null,
                    'prev' => null,
                ],
            ],
        ], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $request = new OrganizationsServersIndexRequest(organization: 'test-org');
    $paginator = $forge->paginate($request);

    $allItems = [];
    foreach ($paginator as $item) {
        $allItems[] = $item;
    }

    expect($allItems)->toHaveCount(0);
    $mockClient->assertSentCount(1);
});
