<?php

use Saloon\Enums\Method;
use TeamNifty\Forge\Requests\Recipes\ForgeRecipesIndexRequest;

it('can be instantiated', function (): void {
    $request = new ForgeRecipesIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(ForgeRecipesIndexRequest::class);
});

it('has correct HTTP method', function (): void {
    $request = new ForgeRecipesIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function (): void {
    $request = new ForgeRecipesIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
