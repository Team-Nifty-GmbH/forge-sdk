<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationRecipesStoreRequest;
use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;

it('can be instantiated', function () {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationRecipesStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationRecipesStoreRequest(organization: 'test-value', name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value', teamId: 'test-value');

    expect($request->body()->all())->toBeArray();
});
