<?php

use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesUpdateRequest;
use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;

it('can be instantiated', function () {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRecipesUpdateRequest::class);
});

it('has correct HTTP method', function () {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function () {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request->body()->all())->toBeArray();
});
