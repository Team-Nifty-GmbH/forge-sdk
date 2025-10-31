<?php

use TeamNifty\Forge\Requests\Recipes\ForgeRecipesIndexRequest;
use Saloon\Enums\Method;

it('can be instantiated', function () {
    $request = new ForgeRecipesIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request)->toBeInstanceOf(ForgeRecipesIndexRequest::class);
});

it('has correct HTTP method', function () {
    $request = new ForgeRecipesIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->getMethod())->toBe(Method::GET);
});

it('resolves endpoint correctly', function () {
    $request = new ForgeRecipesIndexRequest(pagesize: 1, pagecursor: 'test-value');

    expect($request->resolveEndpoint())->toBeString();
});
