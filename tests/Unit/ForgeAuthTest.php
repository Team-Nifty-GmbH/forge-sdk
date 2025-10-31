<?php

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\Requests\Servers\OrganizationsServersIndexRequest;

it('uses bearer token authentication', function () {
    $forge = new Forge(bearerToken: 'test-token');
    $auth = $forge->defaultAuth();

    expect($auth)->toBeInstanceOf(TokenAuthenticator::class);
});

it('creates OAuth config when OAuth parameters provided', function () {
    $forge = new Forge(
        bearerToken: 'test-token',
        clientId: 'client-id',
        clientSecret: 'client-secret'
    );

    $config = $forge->defaultOauthConfig();

    expect($config->getClientId())->toBe('client-id')
        ->and($config->getClientSecret())->toBe('client-secret')
        ->and($config->getAuthorizeEndpoint())->toBe('https://forge.laravel.com/oauth/authorize')
        ->and($config->getTokenEndpoint())->toBe('https://forge.laravel.com/oauth/token');
});

it('sends requests with bearer token in header', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $request = new OrganizationsServersIndexRequest(organization: 'test-org');
    $forge->send($request);

    $mockClient->assertSent(function ($request, $response) {
        return $response->getPendingRequest()->headers()->get('Authorization') === 'Bearer test-token';
    });
});

it('builds correct URLs for requests', function () {
    $mockClient = new MockClient([
        MockResponse::make(['data' => []], 200),
    ]);

    $forge = new Forge(bearerToken: 'test-token');
    $forge->withMockClient($mockClient);

    $request = new OrganizationsServersIndexRequest(organization: 'test-org');
    $forge->send($request);

    $mockClient->assertSent(function ($request, $response) {
        return str_starts_with($response->getPendingRequest()->getUrl(), 'https://forge.laravel.com/api/');
    });
});
