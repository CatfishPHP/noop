<?php

declare(strict_types=1);

namespace Tests\Noop;

use PhpParser\Error;
use PhpParser\Node\Stmt\Function_;
use PhpParser\Node\Stmt\Namespace_;
use PhpParser\ParserFactory;
use PHPUnit\Framework\TestCase;
use Throwable;
use function Catfish\Noop\noop;
use function file_get_contents;

class FunctionTest extends TestCase
{
    public function testNoopFunction() : void
    {
        try {
            noop();
        } catch (Throwable $e) {
            self::fail('noop failed');
        }
    }

    public function testFunctionIsNoop() : void
    {
        $parserFactory = new ParserFactory();

        $parser = $parserFactory->create(ParserFactory::PREFER_PHP7);

        try {
            $ast = $parser->parse((string) file_get_contents(__DIR__ . '/../../src/noop.php'));
        } catch (Error $error) {
            self::fail('code not parsed');
        }

        /** @var Namespace_ $namespace */
        $namespace = $ast[1];

        // The function should be in the correct namespace
        self::assertSame('Catfish\Noop', (string) $namespace->name);

        foreach ($namespace->stmts as $stmt) {
            if ($stmt instanceof Function_ && (string) $stmt->name === 'noop') {
                // There should be no statements for the function for it to truly be noop
                self::assertCount(0, $stmt->stmts, 'noop function is not noop');

                return;
            }
        }

        self::fail('unable to find noop function');
    }
}
