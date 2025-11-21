<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\ForgeRecipesShowRequest;

it('can be instantiated', function (): void {
    $request = new ForgeRecipesShowRequest(forgeRecipe: 1);

    expect($request)->toBeInstanceOf(ForgeRecipesShowRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new ForgeRecipesShowRequest(forgeRecipe: 1);

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new ForgeRecipesShowRequest(forgeRecipe: 1);

    expect($request->resolveEndpoint())->toBeString();
});
