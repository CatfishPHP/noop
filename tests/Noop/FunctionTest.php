<?php

declare(strict_types=1);

namespace Tests\Noop;

use PHPUnit\Framework\TestCase;
use Throwable;
use function Catfish\Noop\noop;

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
}
