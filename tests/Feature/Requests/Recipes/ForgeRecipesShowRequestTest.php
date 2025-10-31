<?php

use TeamNifty\Forge\Requests\Recipes\ForgeRecipesShowRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ForgeRecipesShowRequest(forgeRecipe: 1);

    expect($request)->toBeInstanceOf(ForgeRecipesShowRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ForgeRecipesShowRequest(forgeRecipe: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ForgeRecipesShowRequest(forgeRecipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
