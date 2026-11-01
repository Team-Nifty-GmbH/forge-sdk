<?php

use Illuminate\Support\ServiceProvider;
use Orchestra\Testbench\TestCase;
use TeamNifty\Forge\Forge;
use TeamNifty\Forge\ForgeServiceProvider;

uses(TestCase::class);

beforeEach(function (): void {
    $this->app->register(ForgeServiceProvider::class);
});

it('binds the connector as singleton and alias', function (): void {
    config(['forge.api_token' => 'test-token']);

    expect(app(Forge::class))->toBeInstanceOf(Forge::class)
        ->and(app('forge'))->toBe(app(Forge::class));
});

it('merges the package config', function (): void {
    expect(config('forge'))->toHaveKeys(['api_token', 'oauth']);
});

it('publishes the config file', function (): void {
    expect(ServiceProvider::pathsToPublish(ForgeServiceProvider::class, 'forge-config'))
        ->toHaveCount(1);
});
