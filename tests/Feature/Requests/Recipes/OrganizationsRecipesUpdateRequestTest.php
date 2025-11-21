<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Enums\CreateBackgroundProcessRequestUser;
use TeamNifty\Forge\Requests\Recipes\OrganizationsRecipesUpdateRequest;

it('can be instantiated', function (): void {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request)->toBeInstanceOf(OrganizationsRecipesUpdateRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request->getMethod())->toBe(Method::PUT);
});

it('resolves endpoint correctly', function (): void {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function (): void {
    $request = new OrganizationsRecipesUpdateRequest(organization: 'test-value', recipe: 1, name: 'test-value', user: CreateBackgroundProcessRequestUser::cases()[0], script: 'test-value');

    expect($request->body()->all())->toBeArray();
});
