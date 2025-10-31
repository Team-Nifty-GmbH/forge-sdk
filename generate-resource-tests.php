<?php

/**
 * This script generates Pest test files for all Resource classes method calls
 * to achieve 100% test coverage.
 */

require __dir__ . '/vendor/autoload.php';

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

$resourceDir = __DIR__ . '/src/Resource';
$testsDir = __DIR__ . '/tests/Feature/Resources';

// Create tests directory if it doesn't exist
if (!is_dir($testsDir)) {
    mkdir($testsDir, 0755, true);
}

// Get all PHP files in Resource directory
$files = glob($resourceDir . '/*.php');

foreach ($files as $file) {
    $className = basename($file, '.php');
    $fqcn = "TeamNifty\\Forge\\Resource\\$className";

    if (!class_exists($fqcn)) {
        echo "Skipping $fqcn - class not found\n";
        continue;
    }

    $reflection = new ReflectionClass($fqcn);
    $methods = $reflection->getMethods(ReflectionMethod::IS_PUBLIC);

    // Filter to only include methods that end with "Request"
    $requestMethods = array_filter($methods, function($method) use ($reflection) {
        return str_ends_with($method->getName(), 'Request') &&
               $method->getDeclaringClass()->getName() === $reflection->getName();
    });

    if (empty($requestMethods)) {
        echo "Skipping $fqcn - no request methods found\n";
        continue;
    }

    // Generate test file
    $testFile = $testsDir . '/' . $className . 'Test.php';
    $testContent = generateResourceTestContent($className, $fqcn, $requestMethods);

    file_put_contents($testFile, $testContent);
    echo "Generated test for $fqcn\n";
}

echo "\nDone! Generated resource tests.\n";

function generateResourceTestContent(string $className, string $fqcn, array $methods): string
{
    $useStatements = [
        "use $fqcn;",
        "use Saloon\\Http\\Faking\\MockClient;",
        "use Saloon\\Http\\Faking\\MockResponse;",
        "use TeamNifty\\Forge\\Forge;",
    ];

    $tests = [];

    foreach ($methods as $method) {
        $methodName = $method->getName();
        $params = $method->getParameters();

        // Generate mock parameters
        $paramValues = [];
        foreach ($params as $param) {
            $type = $param->getType();
            $typeName = null;

            if ($type) {
                if ($type instanceof ReflectionUnionType) {
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

            $value = match(true) {
                $typeName === 'string' => "'test-value'",
                $typeName === 'int' => '1',
                $typeName === 'bool' => 'true',
                $typeName === 'array' => "['test' => 'value']",
                $typeName && class_exists($typeName) && enum_exists($typeName) => $typeName . '::cases()[0]',
                $param->isDefaultValueAvailable() => var_export($param->getDefaultValue(), true),
                default => 'null',
            };

            // Add use statements for enums
            if ($typeName && class_exists($typeName) && enum_exists($typeName)) {
                $useStatements[] = "use $typeName;";
            }

            $paramValues[] = $value;
        }

        $paramsString = implode(', ', $paramValues);

        $tests[] = "it('can call $methodName method', function () {";
        $tests[] = "    \$mockClient = new MockClient([";
        $tests[] = "        MockResponse::make(['data' => []], 200),";
        $tests[] = "    ]);";
        $tests[] = "";
        $tests[] = "    \$forge = new Forge(bearerToken: 'test-token');";
        $tests[] = "    \$forge->withMockClient(\$mockClient);";
        $tests[] = "";
        $tests[] = "    \$resource = new $className(\$forge);";
        $tests[] = "    \$response = \$resource->$methodName($paramsString);";
        $tests[] = "";
        $tests[] = "    expect(\$response)->toBeObject();";
        $tests[] = "    \$mockClient->assertSentCount(1);";
        $tests[] = "});";
        $tests[] = "";
    }

    $useStatements = array_unique($useStatements);
    $usesString = implode("\n", $useStatements);
    $testsString = implode("\n", $tests);

    return <<<PHP
<?php

$usesString

$testsString
PHP;
}
