<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;
use TeamNifty\Forge\Requests\Recipes\OrganizationRecipesStoreRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationRecipesStoreRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request->body()->all())->toBeArray();
});
