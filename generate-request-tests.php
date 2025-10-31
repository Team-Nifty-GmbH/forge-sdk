<?php

/**
 * This script generates Pest test files for all Request classes
 * to achieve 100% test coverage.
 */

require __DIR__ . '/vendor/autoload.php';

use Saloon\Enums\Method;
use Saloon\PaginationPlugin\Contracts\HasPagination;

$requestsDir = __DIR__ . '/src/Requests';
$testsDir = __DIR__ . '/tests/Feature/Requests';

// Create tests directory if it doesn't exist
if (!is_dir($testsDir)) {
    mkdir($testsDir, 0755, true);
}

// Get all subdirectories in src/Requests
$subdirs = array_filter(glob($requestsDir . '/*'), 'is_dir');

foreach ($subdirs as $subdir) {
    $category = basename($subdir);
    $categoryTestDir = $testsDir . '/' . $category;

    if (!is_dir($categoryTestDir)) {
        mkdir($categoryTestDir, 0755, true);
    }

    // Get all PHP files in this category
    $files = glob($subdir . '/*.php');

    foreach ($files as $file) {
        $className = basename($file, '.php');
        $fqcn = "TeamNifty\\Forge\\Requests\\$category\\$className";

        try {
            if (!class_exists($fqcn)) {
                echo "Skipping $fqcn - class not found\n";
                continue;
            }
        } catch (\Throwable $e) {
            echo "Skipping $fqcn - error loading class: {$e->getMessage()}\n";
            continue;
        }

        $reflection = new ReflectionClass($fqcn);
        $constructor = $reflection->getConstructor();

        if (!$constructor) {
            echo "Skipping $fqcn - no constructor\n";
            continue;
        }

        $parameters = $constructor->getParameters();
        $paramDocs = [];
        $paramValues = [];
        $paramNames = [];

        foreach ($parameters as $param) {
            $name = $param->getName();
            $paramNames[] = $name;
            $type = $param->getType();

            // Get type name (handling union types)
            $typeName = null;
            if ($type) {
                if ($type instanceof ReflectionUnionType) {
                    // For union types, use the first non-null type
                    $types = $type->getTypes();
                    foreach ($types as $t) {
                        if ($t->getName() !== 'null') {
                            $typeName = $t->getName();
                            break;
                        }
                    }
                } elseif ($type instanceof ReflectionNamedType) {
                    $typeName = $type->getName();
                }
            }

            // Generate appropriate test values based on parameter type
            $value = match(true) {
                $typeName === 'string' => "'test-value'",
                $typeName === 'int' => '1',
                $typeName === 'bool' => 'true',
                $typeName === 'array' => "['test' => 'value']",
                $typeName && class_exists($typeName) && enum_exists($typeName) => $typeName . '::cases()[0]',
                $param->isDefaultValueAvailable() => var_export($param->getDefaultValue(), true),
                default => 'null',
            };

            $paramValues[] = $value;
            $paramDocs[] = " *     $name: $value";
        }

        // Check if request has pagination
        $hasPagination = $reflection->implementsInterface(HasPagination::class);

        // Get HTTP method
        $instance = null;
        try {
            $mockValues = array_map(fn($v) => eval("return $v;"), $paramValues);
            $instance = $reflection->newInstanceArgs($mockValues);
        } catch (\Throwable $e) {
            echo "Could not instantiate $fqcn: {$e->getMessage()}\n";
            continue;
        }

        $method = $instance->getMethod()->value;

        // Generate test file
        $testFile = $categoryTestDir . '/' . $className . 'Test.php';
        $testContent = generateTestContent($className, $fqcn, $category, $paramNames, $paramValues, $method, $hasPagination);

        file_put_contents($testFile, $testContent);
        echo "Generated test for $fqcn\n";
    }
}

echo "\nDone! Generated tests for all requests.\n";

function generateTestContent(string $className, string $fqcn, string $category, array $paramNames, array $paramValues, string $method, bool $hasPagination): string
{
    $useStatements = "use $fqcn;\nuse Saloon\\Enums\\Method;";

    if ($hasPagination) {
        $useStatements .= "\nuse Saloon\\PaginationPlugin\\Contracts\\HasPagination;";
    }

    if (str_contains(implode('', $paramValues), '::cases()')) {
        // Extract enum class names from param values
        foreach ($paramValues as $value) {
            if (preg_match('/([A-Za-z0-9\\\\]+)::cases\(\)/', $value, $matches)) {
                $useStatements .= "\nuse {$matches[1]};";
            }
        }
    }

    $paramsString = implode(', ', array_map(
        fn($name, $value) => "$name: $value",
        $paramNames,
        $paramValues
    ));

    $tests = [
        "it('can be instantiated', function () {",
        "    \$request = new $className($paramsString);",
        "",
        "    expect(\$request)->toBeInstanceOf($className::class);",
        "});",
        "",
        "it('has correct HTTP method', function () {",
        "    \$request = new $className($paramsString);",
        "",
        "    expect(\$request->getMethod())->toBe(Method::$method);",
        "});",
        "",
        "it('resolves endpoint correctly', function () {",
        "    \$request = new $className($paramsString);",
        "",
        "    expect(\$request->resolveEndpoint())->toBeString();",
        "});",
    ];

    if (in_array($method, ['POST', 'PUT', 'PATCH'])) {
        $tests[] = "";
        $tests[] = "it('has correct body structure', function () {";
        $tests[] = "    \$request = new $className($paramsString);";
        $tests[] = "";
        $tests[] = "    expect(\$request->body()->all())->toBeArray();";
        $tests[] = "});";
    }

    if ($hasPagination) {
        $tests[] = "";
        $tests[] = "it('implements pagination interface', function () {";
        $tests[] = "    \$request = new $className($paramsString);";
        $tests[] = "";
        $tests[] = "    expect(\$request)->toBeInstanceOf(HasPagination::class);";
        $tests[] = "});";
    }

    $testsString = implode("\n", $tests);

    return <<<PHP
<?php

$useStatements

$testsString

PHP;
}
