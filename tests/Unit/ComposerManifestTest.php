<?php

it('only registers Laravel aliases whose target class exists', function (): void {
    $manifest = json_decode(file_get_contents(__DIR__ . '/../../composer.json'), true);

    $brokenAliases = array_filter(
        $manifest['extra']['laravel']['aliases'] ?? [],
        fn (string $target): bool => ! class_exists($target),
    );

    expect($brokenAliases)->toBeEmpty();
});
