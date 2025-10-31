<?php

use TeamNifty\Forge\Requests\Recipes\ForgeRecipesRunsStoreRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ForgeRecipesRunsStoreRequest(forgeRecipe: 1, email: true, servers: ['test' => 'value']);

    expect($request)->toBeInstanceOf(ForgeRecipesRunsStoreRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ForgeRecipesRunsStoreRequest(forgeRecipe: 1, email: true, servers: ['test' => 'value']);

    expect($request->getMethod())->toBe(Method::POST);
});

it('resolves endpoint correctly', function () {
    $request = new ForgeRecipesRunsStoreRequest(forgeRecipe: 1, email: true, servers: ['test' => 'value']);

    expect($request->resolveEndpoint())->toBeString();
});

it('has correct body structure', function () {
    $request = new ForgeRecipesRunsStoreRequest(forgeRecipe: 1, email: true, servers: ['test' => 'value']);

    expect($request->body()->all())->toBeArray();
});
