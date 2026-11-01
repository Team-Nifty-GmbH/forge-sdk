<?php

use Spatie\LaravelData\Data;

it('can be instantiated', function (string $class): void {
    expect(makeWithDummyArguments($class))->toBeInstanceOf(Data::class);
})->with(fn (): array => array_map(
    fn (string $file): string => 'TeamNifty\\Forge\\Dto\\' . basename($file, '.php'),
    glob(__DIR__ . '/../../src/Dto/*.php'),
));
